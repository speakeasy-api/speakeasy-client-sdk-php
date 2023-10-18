# Requests
(*requests*)

## Overview

REST APIs for retrieving request information

### Available Operations

* [generateRequestPostmanCollection](#generaterequestpostmancollection) - Generate a Postman collection for a particular request.
* [getRequestFromEventLog](#getrequestfromeventlog) - Get information about a particular request.
* [queryEventLog](#queryeventlog) - Query the event log to retrieve a list of requests.

## generateRequestPostmanCollection

Generates a Postman collection for a particular request. 
Allowing it to be replayed with the same inputs that were captured by the SDK.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\GenerateRequestPostmanCollectionRequest;

$security = new Security();
$security->apiKey = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GenerateRequestPostmanCollectionRequest();
    $request->requestID = 'Architect';

    $response = $sdk->requests->generateRequestPostmanCollection($request);

    if ($response->postmanCollection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                     | Type                                                                                                                                                          | Required                                                                                                                                                      | Description                                                                                                                                                   |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                    | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\GenerateRequestPostmanCollectionRequest](../../models/operations/GenerateRequestPostmanCollectionRequest.md) | :heavy_check_mark:                                                                                                                                            | The request object to use for the request.                                                                                                                    |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GenerateRequestPostmanCollectionResponse](../../models/operations/GenerateRequestPostmanCollectionResponse.md)**


## getRequestFromEventLog

Get information about a particular request.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetRequestFromEventLogRequest;

$security = new Security();
$security->apiKey = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetRequestFromEventLogRequest();
    $request->requestID = 'Chevrolet';

    $response = $sdk->requests->getRequestFromEventLog($request);

    if ($response->unboundedRequest !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetRequestFromEventLogRequest](../../models/operations/GetRequestFromEventLogRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetRequestFromEventLogResponse](../../models/operations/GetRequestFromEventLogResponse.md)**


## queryEventLog

Supports retrieving a list of request captured by the SDK for this workspace.
Allows the filtering of requests on a number of criteria such as ApiID, VersionID, Path, Method, etc.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\QueryEventLogRequest;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Filters;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Filter;

$security = new Security();
$security->apiKey = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new QueryEventLogRequest();
    $request->filters = new Filters();
    $request->filters->filters = [
        new Filter(),
    ];
    $request->filters->limit = 241978;
    $request->filters->offset = 451388;
    $request->filters->operator = 'Interactions';

    $response = $sdk->requests->queryEventLog($request);

    if ($response->boundedRequests !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\QueryEventLogRequest](../../models/operations/QueryEventLogRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\QueryEventLogResponse](../../models/operations/QueryEventLogResponse.md)**

