<?php

namespace Cryptommer\Tests;

use Cryptommer\Smsir\SmsirServiceProvider;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Facade;
use PHPUnit\Framework\TestCase as TestCasePhpUnit;

class TestCase extends TestCasePhpUnit
{
    protected Application $app;

    public function setUp(): void
    {
        parent::setUp();
        $app = new Application;
        $config = mock('Config');
        $config->shouldReceive('set');
        $config->shouldReceive('get')->andReturn([]);
        $app->bind('config', function () use($config) {
            return $config;
        });
        // Facade
        Facade::setFacadeApplication($app);
        // Register providers
        $provider = new SmsirServiceProvider($app);
        $app->register($provider);
        $this->app = $app;
    }
}
