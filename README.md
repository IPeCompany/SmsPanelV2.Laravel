# sms.ir laravel package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/cryptommer/smsir.svg?style=flat-square)](https://packagist.org/packages/cryptommer/smsir)
[![Quality Score](https://img.shields.io/scrutinizer/g/cryptommer/Smsir.svg?style=flat-square)](https://scrutinizer-ci.com/g/cryptommer/Sms-ir)
[![Total Downloads](https://img.shields.io/packagist/dt/cryptommer/Smsir.svg?style=flat-square)](https://packagist.org/packages/cryptommer/smsir)

This is a official [sms.ir](https://sms.ir) laravel package 

## Installation

You can install the package via composer:

```bash
composer require cryptommer/smsir
```

Add this to env file
```
SMSIR_API_KEY=
SMSIR_LINE_NUMBER=
```

## Usage

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

### Translations
#### Delivery Status
```php
__(`smsir.DeliveryStatus.$delivery_status`);
```
#### Request Status
```php
__(`smsir.SendStatus.$status`);
```

[Document](Response.md)

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

-   [Pouya Biglari](https://github.com/cryptommer)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
