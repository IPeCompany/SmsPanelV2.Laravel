<?php

namespace Cryptommer\Smsir\Objects;

use Illuminate\Support\Carbon;
use PhpParser\Node\Expr\Array_;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

class ScheduleResponse {

    /**
     * @var String
     */
    public $Status;

    /**
     * @var string
     */
    public $Message;

    /**
     * @var BulkData|
     */
    public $Data;

    public function __construct($response) {
        $this->Status = $response['status'];
        $this->Message = $response['message'];
        $this->Data = new BulkData($response['data']);
    }

    /**
     * @return BulkData
     */
    public function getData() {
        return $this->Data;
    }

    /**
     * @return string
     */
    public function getMessage() {
        return $this->Message;
    }

    /**
     * @return String
     */
    public function getStatus(): string {
        return $this->Status;
    }

}
