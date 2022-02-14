# Report
Get report of sent messages and received messages

You can read about report response models [here](Response.md#Report Response Models)
```php
$report = smsir::Report()
```

## Message
Get report of sent message

[Response Model](Response.md#Report Response)
```php
/**
 * @required int $message_id 
 * @returns ReportResponse
 */
$report->Message($message_id)
```

## Pack
Get report of sent pack messages
```php
/**
 * @required string $pack_id 
 * @returns ReportResponse
 */
$report->Pack($pack_id)
```

You can read about "ReportResponse" [here](Response.md#Report Response)

## Today
Get report of Today sent messages
```php
/**
 * @required int $pageSize default 10
 * @required int $pageNumber default 1
 * @returns ReportResponse
 */
$report->Today($pageSize,$pagenumber)
```

## Archived
Get report of Archived sent messages
```php
/**
 * @required int|null $fromDate 
 * @required int|null $toDate 
 * @required int $pageSize default 10
 * @required int $pageNumber default 1
 * @returns ReportResponse
 */
$report->Archived($fromDate, $toDate, $pageSize,$pagenumber)
```

You can read about "ReportResponse" [here](Response.md#Report Response)

## Latest Received Messages
Get report of the latest received messages
```php
/**
 * @required int $count default 100
 * @returns ReceiveResponse
 */
$report->LatestReceived($count)
```

You can read about "ReceiveResponse" [here](Response.md#Receive Response)

## Today Received Messages
Get report of the latest received messages
```php
/**
 * @required int $pageSize default 10
 * @required int $pageNumber default 1
 * @returns ReceiveResponse
 */
$report->TodayReceived($pageSize, $pageNumber)
```

You can read about "ReceiveResponse" [here](Response.md#Receive Response)

## Archived Received Messages
Get report of the archived received messages
```php
/**
 * @required int|null $fromDate 
 * @required int|null $toDate 
 * @required int $pageSize default 10
 * @required int $pageNumber default 1
 * @returns ReceiveResponse
 */
$report->ArchivedReceived($fromDate, $toDate, $pageSize,$pagenumber)
```

You can read about "ReceiveResponse" [here](Response.md#Receive Response)
