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
        $success = false;
        Event::listen(NotificationSent::class, function (NotificationSent $event) use(&$success) {
            if($event->notification instanceof OrderReceiveNotification) {
                $success = true;
            }
        });

        // Fake model
        $model = (new FakeModel)
            ->setAttribute('fullname', 'Ahmadreza Bashari')
            ->setAttribute('phone', '09xxxxxxxxx');

        // Send notification
        FacadesNotification::sendNow([$model], $this->notification);

        $this->assertTrue(($success) ? true : false);
    }

    public function testNotificationCannotFiredWithEmptyResponse()
    {
        $success = false;
        Event::listen(NotificationSent::class, function (NotificationSent $event) use(&$success) {
            if($event->notification instanceof OrderReceiveNotification && empty($event->response)) {
                $success = true;
            }
        });

        // Fake model
        $model = (new FakeModelRouteNotificationEmpty)
            ->setAttribute('fullname', 'Ahmadreza Bashari')
            ->setAttribute('phone', '09xxxxxxxxx');

        // Send notification
        FacadesNotification::sendNow([$model], $this->notification);

        $this->assertTrue(($success) ? true : false);
    }

    public function testNotificationCannotBeFireWithoutRouteNotification()
    {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage("The notifiable doesn`t have 'routeNotificationFor' method");

        // Fake model
        $model = (new FakeModelWithoutRouteNotification)
            ->setAttribute('fullname', 'Ahmadreza Bashari')
            ->setAttribute('phone', '09xxxxxxxxx');

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
        $notification->shouldReceive('via')
            ->andReturn([SmsirChannel::class]);
        $notification->shouldReceive('toSmsir')
            ->andReturn((new SmsirMessage())
            ->template_id(1)
            ->parameters([]));
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

class FakeModelWithoutRouteNotification extends Model
{
    public $filliable = [
        'fullname',
        'phone'
    ];
}

class FakeModelRouteNotificationEmpty extends Model
{
    use RoutesNotifications;

    public function routeNotificationForSmsir()
    {
        return ;
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
