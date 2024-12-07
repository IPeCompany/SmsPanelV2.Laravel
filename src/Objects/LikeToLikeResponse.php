<?php

namespace Cryptommer\Smsir\Objects;

use Cryptommer\Smsir\Contracts\Response;
use Illuminate\Support\Carbon;
use PhpParser\Node\Expr\Array_;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

class LikeToLikeResponse implements Response {


    /**
     * @var String
     */
    public $Status;

    /**
     * @var string
     */
    public $Message;

    /**
     * @var LikeToLikeData|
     */
    public $Data;

    public function __construct($response) {
        $this->Status = $response['status'];
        $this->Message = $response['message'];
        $this->Data = new LikeToLikeData($response['data']);
    }

    /**
     * @return LikeToLikeData
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
