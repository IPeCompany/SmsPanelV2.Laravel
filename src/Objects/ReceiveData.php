<?php

namespace Cryptommer\Smsir\Objects;

use Psr\Http\Message\StreamInterface;

class ReceiveData {

    /**
     * @var int
     */
    public int $Mobile;

    /**
     * @var String
     */
    public string $MessageText;

    /**
     * @var int
     */
    public int $Number;

    /**
     * @var int
     */
    public int $ReceivedDateTime;

    public function __construct(StreamInterface $response) {
        $this->Mobile = $response['mobile'];
        $this->MessageText = $response['messageText'];
        $this->Number = $response['number'];
        $this->ReceivedDateTime = $response['receivedDateTime'];
    }

    /**
     * @return int
     */
    public function getMobile(): int {
        return $this->Mobile;
    }

    /**
     * @return String
     */
    public function getMessageText(): string {
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
