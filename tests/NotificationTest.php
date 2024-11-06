<?php

use Cryptommer\Smsir\Classes\Smsir;
use Cryptommer\Smsir\Notifications\SmsirChannel;
use Cryptommer\Smsir\Notifications\SmsirMessage;
use Cryptommer\Tests\Mocks\SmsirMock;
use Cryptommer\Tests\TestCase;
use Illuminate\Bus\Dispatcher as BusDispatcher;
use Illuminate\Contracts\Bus\Dispatcher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Events\NotificationSent;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\RoutesNotifications;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Notification as FacadesNotification;
use Mockery\MockInterface;

class NotificationTest extends TestCase
{
    private MockInterface $notification;

    private $smsir;

    public function testNotificationIsFired()
    {
        Event::listen(NotificationSent::class, function (NotificationSent $event) {
            $notification = $event->notification;
            if($notification instanceof OrderReceiveNotification) {
                $this->assertTrue(true);
            }
        });

        // Fake model
        $model = (new FakeModel);
        $model->setAttribute('fullname', 'Ahmadreza Bashari');
        $model->setAttribute('phone', '09xxxxxxxxx');
        $this->notification->shouldReceive('toSmsir')
        ->andReturn((new SmsirMessage())->template_id(1)->parameters([]));
        // Send notification
        FacadesNotification::sendNow([$model], $this->notification);
    }

    public function setUp(): void
    {
        parent::setUp();
        $this->app->bind(Dispatcher::class, function ($container) {
            return new BusDispatcher($container);
        });
        //
        $this->app->bind(Smsir::class, function () {
            return (new SmsirMock)->mock();
        });
        // Mock Notification
        $notification = mock(OrderReceiveNotification::class);
        $notification->shouldReceive('via')->andReturn([SmsirChannel::class]);
        $this->notification = $notification;
    }
}

class FakeModel extends Model
{
    use RoutesNotifications;

    public function routeNotificationForSmsir()
    {
        return $this->phone;
    }

    public $filliable = [
        'fullname',
        'phone'
    ];
}

class OrderReceiveNotification extends Notification
{
    //
}
