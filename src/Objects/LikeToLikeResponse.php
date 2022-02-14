<?php

namespace Cryptommer\Smsir\Objects;

use Illuminate\Support\Carbon;
use PhpParser\Node\Expr\Array_;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

class LikeToLikeResponse {


    /**
     * @var String
     */
    public string $Status;

    /**
     * @var string
     */
    public string $Message;

    /**
     * @var LikeToLikeData|
     */
    public LikeToLikeData $Data;

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
