<?php

namespace Cryptommer\Smsir\Objects;

use Illuminate\Support\Carbon;
use PhpParser\Node\Expr\Array_;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

class ScheduleData {

    /**
     * @var float
     */
    public float $ReturnedCreditCount;

    /**
     * @var int
     */
    public int $SmsCount;

    public function __construct(array $data) {
        $this->ReturnedCreditCount = $data['returnedCreditCount'];
        $this->SmsCount = $data['smsCount'];
    }

    /**
     * @return float
     */
    public function getReturnedCreditCount(): float {
        return $this->ReturnedCreditCount;
    }

    /**
     * @return int
     */
    public function getSmsCount(): int {
        return $this->SmsCount;
    }

}
