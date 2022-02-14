<?php

namespace Cryptommer\Smsir\Objects;

use Illuminate\Support\Carbon;
use PhpParser\Node\Expr\Array_;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

class VerifyData {

    /**
     * @var string
     */
    public string $MessageId;

    /**
     * @var float
     */
    public float $Cost;

    /**
     * @param $data array
     */
    public function __construct(array $data) {
        $this->MessageId = $data['messageId'];
        $this->Cost = $data['cost'];
    }

    /**
     * @param float $Cost
     */
    public function setCost(float $Cost): void
    {
        $this->Cost = $Cost;
    }

    /**
     * @return float
     */
    public function getCost(): float
    {
        return $this->Cost;
    }

    /**
     * @param string $MessageId
     */
    public function setMessageId(string $MessageId): void
    {
        $this->MessageId = $MessageId;
    }

    /**
     * @return string
     */
    public function getMessageId(): string
    {
        return $this->MessageId;
    }

}
