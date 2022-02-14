<?php

namespace Cryptommer\Smsir\Objects;

use Psr\Http\Message\StreamInterface;

class ReceiveResponse {


    /**
     * @var String
     */
    public string $Status;

    /**
     * @var string
     */
    public string $Message;

    /**
     * @var ReceiveData[]
     */
    public array $Data;

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
