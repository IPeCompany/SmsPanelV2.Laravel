<?php

namespace Cryptommer\Smsir;

use Cryptommer\Smsir\Classes\Smsir;
use Cryptommer\Smsir\Notifications\SmsirChannel;
use Illuminate\Notifications\ChannelManager;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\ServiceProvider;

class SmsirServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'Smsir');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'Smsir');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        if(config('smsir.panel-routes')) {
            $this->loadRoutesFrom(__DIR__ . '/../routes/routes.php');
        }

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('smsir.php'),
            ], 'config');

            // Publishing the views.
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/Smsir'),
            ], 'views');

            // Publishing assets.
            /* $this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/Smsir'),
            ], 'assets'); */

            // Publishing the translation files.
            $this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/Smsir'),
            ], 'lang');

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'smsir');

        // Register the main class to use with the facade
        $this->app->singleton('Smsir', function () {
            return new Smsir();
        });

        $this->app->bind(SmsirChannel::class, function ($app) {
            return new SmsirChannel(
                $this->app->make(Smsir::class)
            );
        });

        Notification::resolved(function (ChannelManager $service) {
            $service->extend('smsir', function ($app) {
                return $this->app->make(SmsirChannel::class);
            });
        });
    }
}
