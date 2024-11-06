<?php

namespace Cryptommer\Smsir\Notifications;

use Cryptommer\Smsir\Classes\Smsir;
use Illuminate\Notifications\Notification;
use RuntimeException;

class SmsirChannel
{
    /**
     * @var Smsir
     */
    protected $client;

    public function __construct(Smsir $client) {
        $this->client = $client;
    }

    public function send($notifiable, Notification $notification)
    {
        if(! method_exists($notifiable, 'routeNotificationFor')) {
            throw new RuntimeException("The notifiable doesn`t have 'routeNotificationFor' method");
        }

        if (! $to = $notifiable->routeNotificationFor('smsir', $notification)) {
            return;
        }

        if (! empty($this->to)) {
            return;
        }

        $message = $notification->toSmsir($notifiable);

        $response = $this->client->send()->verify($to, $message->template_id, $message->parameters);

        return $response;
    }
}
