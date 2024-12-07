<?php

namespace Cryptommer\Smsir\Objects;

use Cryptommer\Smsir\Contracts\Response;
use Psr\Http\Message\StreamInterface;

class ReportResponse implements Response {

    /**
     * @var String
     */
    public $Status;

    /**
     * @var string
     */
    public $Message;

    /**
     * @var ReportData|ReportData[]
     */
    public $Data;

    public function __construct($response) {
        $this->Status = $response['status'];
        $this->Message = $response['message'];
        if (array_key_exists('messageId', $response['data'])) {
            $this->Data = new ReportData($response['data']);
        } else {
            foreach ($response['data'] as $data) {
                $this->Data[] = new ReportData($data);
            }
        }
    }

    /**
     * @return ReportData|ReportData[]
     */
    public function getData(): ReportData {
        return $this->Data;
    }

    /**
     * @return string
     */
    public function getMessage(): string {
        return $this->Message;
    }

    /**
     * @return String
     */
    public function getStatus(): string {
        return $this->Status;
    }


}
