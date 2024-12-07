<?php

namespace Cryptommer\Smsir\Objects;

use Cryptommer\Smsir\Contracts\Response;
use Psr\Http\Message\StreamInterface;

class LineResponse implements Response {
    /**
     * @var int
     */
    public $Status;

    /**
     * @var string
     */
    public $Message;

    /**
     * @var int[]
     */
    public $Data;

    /**
     * @param $response
     */
    public function __construct($response) {
        $this->Status = $response['status'];
        $this->Message = $response['message'];
        $this->Data = $response['data'];
    }

    /**
     * @return int[]
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
     * @return int
     */
    public function getStatus(): int {
        return $this->Status;
    }
}
