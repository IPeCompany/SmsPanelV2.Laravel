<?php

namespace Cryptommer\Tests\Mocks;

use Cryptommer\Smsir\Classes\Smsir;
use Cryptommer\Tests\Contracts\MockContract;
use Mockery\MockInterface;

class SmsirMock extends BaseMock implements MockContract
{
    public function mock(): MockInterface {
        $mock = mock(Smsir::class);
        $mock->shouldReceive('post', 'get', 'delete')
            ->andSet('LineNumber', '3900123456789')
            ->andReturn($this->response);

        $mock->shouldReceive('Send')
            ->andReturn((new SendMock)->mock());

        return $mock;
    }
}
