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
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security(
    apiKey: "<YOUR_API_KEY_HERE>",
);

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetWorkspaceEventsByTargetRequest(
        targetID: '<value>',
    );
    $response = $sdk->events->getWorkspaceEventsByTarget($request);

    if ($response->cliEventBatch !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\GetWorkspaceEventsByTargetRequest](../../Models/Operations/GetWorkspaceEventsByTargetRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\GetWorkspaceEventsByTargetResponse](../../Models/Operations/GetWorkspaceEventsByTargetResponse.md)**

### Errors

| Error Object                                            | Status Code                                             | Content Type                                            |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| Errors\Error                                            | 5XX                                                     | application/json                                        |
| Speakeasy\SpeakeasyClientSDK\Models\Errors.SDKException | 4xx-5xx                                                 | */*                                                     |


## getWorkspaceTargets

Load targets for a particular workspace

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security(
    apiKey: "<YOUR_API_KEY_HERE>",
);

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetWorkspaceTargetsRequest();
    $response = $sdk->events->getWorkspaceTargets($request);

    if ($response->targetSDKList !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetWorkspaceTargetsRequest](../../Models/Operations/GetWorkspaceTargetsRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetWorkspaceTargetsResponse](../../Models/Operations/GetWorkspaceTargetsResponse.md)**

### Errors

| Error Object                                            | Status Code                                             | Content Type                                            |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| Errors\Error                                            | 5XX                                                     | application/json                                        |
| Speakeasy\SpeakeasyClientSDK\Models\Errors.SDKException | 4xx-5xx                                                 | */*                                                     |


## postWorkspaceEvents

Sends an array of events to be stored for a particular workspace.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security(
    apiKey: "<YOUR_API_KEY_HERE>",
);

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\PostWorkspaceEventsRequest(
        requestBody: [
            new Shared\CliEvent,
        ],
    );
    $response = $sdk->events->postWorkspaceEvents($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PostWorkspaceEventsRequest](../../Models/Operations/PostWorkspaceEventsRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PostWorkspaceEventsResponse](../../Models/Operations/PostWorkspaceEventsResponse.md)**

### Errors

| Error Object                                            | Status Code                                             | Content Type                                            |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| Errors\Error                                            | 5XX                                                     | application/json                                        |
| Speakeasy\SpeakeasyClientSDK\Models\Errors.SDKException | 4xx-5xx                                                 | */*                                                     |


## searchWorkspaceEvents

Search events for a particular workspace by any field

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security(
    apiKey: "<YOUR_API_KEY_HERE>",
);

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\SearchWorkspaceEventsRequest();
    $response = $sdk->events->searchWorkspaceEvents($request);

    if ($response->cliEventBatch !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\SearchWorkspaceEventsRequest](../../Models/Operations/SearchWorkspaceEventsRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\SearchWorkspaceEventsResponse](../../Models/Operations/SearchWorkspaceEventsResponse.md)**

### Errors

| Error Object                                            | Status Code                                             | Content Type                                            |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| Errors\Error                                            | 5XX                                                     | application/json                                        |
| Speakeasy\SpeakeasyClientSDK\Models\Errors.SDKException | 4xx-5xx                                                 | */*                                                     |
