<?php

namespace Cryptommer\Tests\Mocks;

use Cryptommer\Smsir\Classes\Send;
use Cryptommer\Smsir\Objects\BulkResponse;
use Cryptommer\Smsir\Objects\LikeToLikeResponse;
use Cryptommer\Smsir\Objects\ScheduleResponse;
use Cryptommer\Smsir\Objects\VerifyResponse;
use Cryptommer\Tests\Contracts\MockContract;
use Mockery\MockInterface;

class SendMock extends BaseMock implements MockContract
{
    public function mock(): MockInterface
    {
        $mock = mock(Send::class);
        $mock->shouldReceive('Verify')
            ->andReturn(new VerifyResponse($this->response));

        $mock->shouldReceive('deleteScheduled')
            ->andReturn(new ScheduleResponse($this->response));

        $mock->shouldReceive('LikeToLike')
            ->andReturn(new LikeToLikeResponse($this->response));

        $mock->shouldReceive('Bulk')
            ->andReturn(new BulkResponse($this->response));

        return $mock;
    }
}
