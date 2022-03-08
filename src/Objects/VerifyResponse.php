<?php

namespace Cryptommer\Smsir\Objects;

use Illuminate\Support\Carbon;
use PhpParser\Node\Expr\Array_;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

class VerifyResponse {


    /**
     * @var String
     */
    public $Status;

    /**
     * @var string
     */
    public $Message;

    /**
     * @var VerifyData|
     */
    public $Data;

    public function __construct($response) {
        $this->Status = $response['status'];
        $this->Message = $response['message'];
        $this->Data = new VerifyData($response['data']);
    }

    /**
     * @return VerifyData
     */
    public function getData(): VerifyData
    {
        return $this->Data;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->Message;
    }

    /**
     * @return String
     */
    public function getStatus(): string {
        return $this->Status;
    }

}
