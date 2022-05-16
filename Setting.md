#Setting
Get account credit and line numbers
```php
$setting = smsir::Setting()
or
$setting = $smsir->Setting()
```
You can read about Setting Response Models [here](Response.md#Setting Response Models)

## Credit
Get Account Credit
```php
/**
 * @return CreditResponse
 * @throws GuzzleException|HttpException|JsonException
 */
$setting->getCredit()
```
You can read about "CreditResponse" [here](Response.md#Credit Response)

## Line Numbers
Get Account Line Numbers
```php
/**
 * @return LineResponse
 * @throws GuzzleException|HttpException|JsonException
 */
$setting->getLines()
```
You can read about "LineResponse" [here](Response.md#Line Response)
