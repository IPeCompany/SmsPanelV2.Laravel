<?php

namespace Cryptommer\Smsir\Objects;

use Cryptommer\Smsir\Contracts\Response as ContractsResponse;
use Psr\Http\Message\StreamInterface;

class Response implements ContractsResponse {

    /**
     * @var String
     */
    public $Status;

    /**
     * @var string
     */
    public $Message;

    /**
     * @var BulkResponse|
     */
    public $Data;

    public function __construct(StreamInterface $response) {

    }



    /**
     * @param $Data
     */
    public function setData($Data)
    {
        $this->Data = $Data;
    }

    /**
     * @return BulkResponse
     */
    public function getData() {
        return $this->Data;
    }

    /**
     * @param string $Message
     */
    public function setMessage(string $Message) {
        $this->Message = $Message;
    }

    /**
     * @return string
     */
    public function getMessage() {
        return $this->Message;
    }

    /**
     * @param String $Status
     */
    public function setStatus(string $Status) {
        $this->Status = $Status;
    }

    /**
     * @return String
     */
    public function getStatus() {
        return $this->Status;
    }

}
