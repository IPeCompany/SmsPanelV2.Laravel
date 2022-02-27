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
    public $MessageId;

    /**
     * @var int
     */
    public $Mobile;

    /**
     * @var string
     */
    public $MessageText;

    /**
     * @var int
     */
    public $SendDateTime;

    /**
     * @var int
     */
    public $LineNumber;

    /**
     * @var float
     */
    public $Cost;

    /**
     * @var int|null
     */
    public $DeliveryState;

    /**
     * @var int|null
     */
    public $DeliveryDateTime;

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
    public function getDeliveryDateTime() {
        return $this->DeliveryDateTime;
    }

    /**
     * @return int|null
     */
    public function getDeliveryState() {
        return $this->DeliveryState;
    }

    /**
     * @return int
     */
    public function getSendDateTime(): int {
        return $this->SendDateTime;
    }

}
