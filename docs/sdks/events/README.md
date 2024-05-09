# Events


## Overview

REST APIs for capturing event data

### Available Operations

* [getWorkspaceEventsByTarget](#getworkspaceeventsbytarget) - Load recent events for a particular workspace
* [getWorkspaceTargets](#getworkspacetargets) - Load targets for a particular workspace
* [postWorkspaceEvents](#postworkspaceevents) - Post events for a specific workspace
* [searchWorkspaceEvents](#searchworkspaceevents) - Search events for a particular workspace by any field

## getWorkspaceEventsByTarget

Load recent events for a particular workspace

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetWorkspaceEventsByTargetRequest();
    $request->afterCreatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-04-01T04:00:29.393Z');
    $request->targetID = '<value>';;

    $response = $sdk->events->getWorkspaceEventsByTarget($request);

    if ($response->cliEventBatch !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetWorkspaceEventsByTargetRequest](../../Models/Operations/GetWorkspaceEventsByTargetRequest.md) | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetWorkspaceEventsByTargetResponse](../../Models/Operations/GetWorkspaceEventsByTargetResponse.md)**


## getWorkspaceTargets

Load targets for a particular workspace

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetWorkspaceTargetsRequest();
    $request->afterLastEventCreatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-11-24T17:59:46.647Z');;

    $response = $sdk->events->getWorkspaceTargets($request);

    if ($response->targetSDKList !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetWorkspaceTargetsRequest](../../Models/Operations/GetWorkspaceTargetsRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetWorkspaceTargetsResponse](../../Models/Operations/GetWorkspaceTargetsResponse.md)**


## postWorkspaceEvents

Sends an array of events to be stored for a particular workspace.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PostWorkspaceEventsRequest();
    $request->requestBody = [
        new Shared\CliEvent(),
    ];;

    $response = $sdk->events->postWorkspaceEvents($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\PostWorkspaceEventsRequest](../../Models/Operations/PostWorkspaceEventsRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\PostWorkspaceEventsResponse](../../Models/Operations/PostWorkspaceEventsResponse.md)**


## searchWorkspaceEvents

Search events for a particular workspace by any field

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\SearchWorkspaceEventsRequest();
    $request->lintReportDigest = '<value>';
    $request->openapiDiffReportDigest = '<value>';
    $request->sourceRevisionDigest = '<value>';;

    $response = $sdk->events->searchWorkspaceEvents($request);

    if ($response->cliEventBatch !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\SearchWorkspaceEventsRequest](../../Models/Operations/SearchWorkspaceEventsRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\SearchWorkspaceEventsResponse](../../Models/Operations/SearchWorkspaceEventsResponse.md)**

