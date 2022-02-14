<?php

namespace Cryptommer\Smsir\Objects;

use Psr\Http\Message\StreamInterface;

class Response {

    /**
     * @var String
     */
    public string $Status;

    /**
     * @var string
     */
    public string $Message;

    /**
     * @var BulkResponse|
     */
    public $Data;

    public function __construct(StreamInterface $response) {

    }



    /**
     * @param $Data
     */
    public function setData($Data): void
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
    public function setMessage(string $Message): void {
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
    public function setStatus(string $Status): void {
        $this->Status = $Status;
    }

    /**
     * @return String
     */
    public function getStatus(): string {
        return $this->Status;
    }

}
