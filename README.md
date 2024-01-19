# sms.ir v2 laravel package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/cryptommer/smsir.svg?style=flat-square)](https://packagist.org/packages/cryptommer/smsir)
[![Quality Score](https://img.shields.io/scrutinizer/g/cryptommer/Smsir.svg?style=flat-square)](https://scrutinizer-ci.com/g/cryptommer/Sms-ir)
[![Total Downloads](https://img.shields.io/packagist/dt/cryptommer/Smsir.svg?style=flat-square)](https://packagist.org/packages/cryptommer/smsir)

This is a official [sms.ir](https://sms.ir) laravel package

## Installation

You can install the package via composer:

```bash
composer require cryptommer/smsir
```
publish provider (if you don't use laravel skip this)
```
php artisan vendor:publish --provider="Cryptommer\Smsir\SmsirServiceProvider"
```

Add this to env file (if you don't use laravel skip this)
```
SMSIR_API_KEY=
SMSIR_LINE_NUMBER=
```

## Usage
add this line to the beginning of any class that you want to use smsir functions
### For Laravel
```php
use Cryptommer\Smsir\Smsir;
```
### Pure PHP 
```php
require __DIR__ . '/vendor/autoload.php';
use Cryptommer\Smsir\Classes\Smsir;

$smsir = new Smsir($line_number, $api_key)
```


### Sending Message
Sending messages to mobile numbers

[Document](Send.md)

### Report Messages
Get report of sent messages and received messages

[Document](Report.md)

### Setting
Get account credit and line numbers

[Document](Setting.md)

### Responses
Response Models

[Document](Response.md)

### View Routes (for laravel users)

Sending sms
```
http://localhost:8000/smsir/send/bulk
```

Get Report of today sent sms
```
http://localhost:8000/smsir/report/sent/today
```

Get Report of today received sms
```
http://localhost:8000/smsir/report/sent/today
```

### Translations
#### Delivery Status
```php
__(`smsir.DeliveryStatus.$delivery_status`);
```
#### Request Status
```php
__(`smsir.SendStatus.$status`);
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits
-   به سفارش شرکت ایده پردازان
-   [Pouya Biglari](https://github.com/cryptommer)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
