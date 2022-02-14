# Sending Messages
Sending messages to mobile numbers
```php
$send = smsir::Send()
```

You can read about sending messages responses [here](Response.md#Sending Message Response Models)
## Bulk
Sending a message to list of mobile numbers
```php
/**
 * @required string $message
 * @required string[] $mobiles
 * int|null $send_at for sending in specific date and time (must be in unix)
 * int|null $line_number 
 * @returns BulkResponse
 */
$send->bulk($message, $mobiles, $send_at, $line_number)
```
You can read about "BulkResponse" [here](Response.md#Bulk Response)

## Like to Like
Sending pair to pair message to mobile numbers
```php
/**
 * @required string[] $messages
 * @required string[] $mobiles
 * int|null $send_at for sending in specific date and time (must be in unix)
 * int|null $line_number 
 * @returns LikeToLikeResponse
 */
$send->liketolike($messages, $mobiles, $send_at, $line_number)
```
You can read about "LikeToLikeResponse" [here](Response.md#LikeToLike Response)

## Delete Scheduled
Deleting scheduled messages
```php
/**
 * @required string $PackId 
 * @returns ScheduleResponse
 */
$send->deleteScheduled($PackId)
```
You can read about "ScheduleResponse" [here](Response.md#Schedule Response)

## Verification Code
Sending verification code to mobile number with predefined template
```php
/**
 * @required string $mobile
 * @required int $templateId
 * @required Parameters[] $parameters
 * @returns VerifyResponse
 */
$send->Verify($mobile, $templateId, $parameters)
```
You can read about "VerifyResponse" [here](Response.md#Verify Response)

