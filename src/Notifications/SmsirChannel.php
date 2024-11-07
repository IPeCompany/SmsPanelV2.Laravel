<?php

namespace Cryptommer\Smsir\Notifications;

use Cryptommer\Smsir\Classes\Smsir;
use Cryptommer\Smsir\Contracts\Response;
use Illuminate\Notifications\Notification;

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
        if (! $to = $notifiable->routeNotificationFor('smsir', $notification)) {
            return;
        }

        if (! empty($this->to)) {
            return;
        }

        $message = $notification->toSmsir($notifiable);

        if($message instanceof Response) {
            return $message;
        };

        $response = $this->client->send()->verify($to, $message->template_id, $message->parameters);

        return $response;
    }


}