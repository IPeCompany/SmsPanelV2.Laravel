<?php

namespace Cryptommer\Tests;

use Cryptommer\Tests\TestCase;

class SmsirBindingTest extends TestCase
{
    public function testSmsirIsResolved()
    {
        $this->app->make('Smsir');

        $this->assertTrue($this->app->resolved('Smsir'));
    }
}
