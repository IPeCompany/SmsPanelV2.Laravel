#Response Models

## Sending Message Response Models

### Bulk Response
```php
/** @return int **/
$response->Status
/** @return string **/
$response->Message
/** @return BulkData **/
$response_data = $reponse->Data
/** @return string **/
$reponse_data->PackId
/** @return string[] **/
$reponse_data-> MessageIds
/** @return float **/
$reponse_data->Cost
```

### LikeToLike Response
```php
/** @return int **/
$response->Status 
/** @return string **/
$response->Message
/** @return BulkData **/
$response_data = $reponse->Data
/** @return string **/
$reponse_data->PackId
/** @return string[] **/
$reponse_data->MessageIds
/** @return float **/
$reponse_data->Cost
```


### Schedule Response
```php
/** @return int **/
$response->Status 
/** @return string **/
$response->Message
/** @return ScheduleData **/
$response_data = $reponse->Data
/** @return float **/
$reponse_data->ReturnedCreditCount
/** @return int **/
$reponse_data->SmsCount
```


### Verify Response
```php
/** @return int **/
$response->Status 
/** @return string **/
$response->Message
/** @return ScheduleData **/
$response_data = $reponse->Data
/** @return int **/
$reponse_data->MessageId
/** @return float **/
$reponse_data->Cost
```


## Report Response Models

### Report Response
```php
/** @return int **/
$response->Status 
/** @return string **/
$response->Message
/** @return ScheduleData **/
$response_data = $reponse->Data
/** @return string **/
$reponse_data->MessageId
/** @return int **/
$reponse_data->Mobile
/** @return string **/
$reponse_data->MessageText
/** @return int **/
$reponse_data->SendDateTime
/** @return int **/
$reponse_data->LineNumber
/** @return float **/
$reponse_data->Cost
/** @return int|null **/
$reponse_data->DeliveryState
/** @return int|null **/
$reponse_data->DeliveryDateTime
```


### Receive Response
```php
/** @return int **/
$response->Status 
/** @return string **/
$response->Message
/** @return ScheduleData **/
$response_data = $reponse->Data
/** @return int **/
$reponse_data->Mobile
/** @return string **/
$reponse_data->MessageText
/** @return int **/
$reponse_data->Number
/** @return int **/
$reponse_data->ReceivedDateTime
```


## Setting Response Models

### Credit Response
```php
/** @return int **/
$response->Status 
/** @return string **/
$response->Message
/** @return float **/
$credit = $reponse->Data
```

### Line Response
```php
/** @return int **/
$response->Status 
/** @return string **/
$response->Message
/** @return int[] **/
$line_numbers = $reponse->Data
```
