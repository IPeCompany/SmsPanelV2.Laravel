<?php

namespace Cryptommer\Smsir\Objects;

use Illuminate\Support\Carbon;
use PhpParser\Node\Expr\Array_;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

class ReportData {

    /**
     * @var string
     */
    public string $MessageId;

    /**
     * @var int
     */
    public int $Mobile;

    /**
     * @var string
     */
    public string $MessageText;

    /**
     * @var int
     */
    public int $SendDateTime;

    /**
     * @var int
     */
    public int $LineNumber;

    /**
     * @var float
     */
    public float $Cost;

    /**
     * @var int|null
     */
    public ?int $DeliveryState;

    /**
     * @var int|null
     */
    public ?int $DeliveryDateTime;

    /**
     * @param $data array
     */
    public function __construct(array $data) {
        $this->MessageId = $data['messageId'];
        $this->Mobile = $data['mobile'];
        $this->MessageText = $data['messageText'];
        $this->SendDateTime = $data['sendDateTime'];
        $this->LineNumber = $data['lineNumber'];
        $this->Cost = $data['cost'];
        $this->DeliveryState = $data['deliveryState'];
        $this->DeliveryDateTime = $data['deliveryDateTime'];
    }

    /**
     * @return string
     */
    public function getMessageId(): string {
        return $this->MessageId;
    }

    /**
     * @return int
     */
    public function getMobile(): int {
        return $this->Mobile;
    }

    /**
     * @return string
     */
    public function getMessageText(): string {
        return $this->MessageText;
    }

    /**
     * @return int
     */
    public function getLineNumber(): int {
        return $this->LineNumber;
    }

    /**
     * @return float
     */
    public function getCost(): float {
        return $this->Cost;
    }

    /**
     * @return int|null
     */
    public function getDeliveryDateTime(): ?int {
        return $this->DeliveryDateTime;
    }

    /**
     * @return int|null
     */
    public function getDeliveryState(): ?int {
        return $this->DeliveryState;
    }

    /**
     * @return int
     */
    public function getSendDateTime(): int {
        return $this->SendDateTime;
    }

}
