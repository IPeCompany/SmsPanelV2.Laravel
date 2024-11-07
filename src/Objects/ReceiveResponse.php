<?php

namespace Cryptommer\Smsir\Objects;

use Cryptommer\Smsir\Contracts\Response;
use Psr\Http\Message\StreamInterface;

class ReceiveResponse implements Response {


    /**
     * @var String
     */
    public $Status;

    /**
     * @var string
     */
    public $Message;

    /**
     * @var ReceiveData[]
     */
    public $Data;

    public function __construct($response) {
        $this->Status = $response['status'];
        $this->Message = $response['message'];
        foreach ($response['data'] as $data) {
            $this->Data[] = new ReceiveData($data);
        }
    }

    /**
     * @return ReceiveData[]
     */
    public function getData(): array {
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
