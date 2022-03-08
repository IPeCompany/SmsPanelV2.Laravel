<?php

namespace Cryptommer\Smsir\Objects;

use Psr\Http\Message\StreamInterface;

class ReceiveData {

    /**
     * @var int
     */
    public $Mobile;

    /**
     * @var String
     */
    public $MessageText;

    /**
     * @var int|null
     */
    public $Number;

    /**
     * @var int|null
     */
    public $ReceivedDateTime;

    /**
     * @param StreamInterface|array $response
     */
    public function __construct($response) {
        $this->Mobile = $response['mobile'];
        $this->MessageText = $response['messageText'];
        $this->Number = $response['number'];
        $this->ReceivedDateTime = $response['receivedDateTime'];
    }

    /**
     * @return int
     */
    public function getMobile(): int
    {
        return $this->Mobile;
    }

    /**
     * @return String
     */
    public function getMessageText(): string
    {
        return $this->MessageText;
    }

    /**
     * @return int
     */
    public function getNumber(): int {
        return $this->Number;
    }

    /**
     * @return int
     */
    public function getReceivedDateTime(): int {
        return $this->ReceivedDateTime;
    }

}
