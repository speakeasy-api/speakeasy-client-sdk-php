# Events


## Overview

REST APIs for capturing event data

### Available Operations

* [postWorkspaceEvents](#postworkspaceevents) - Post events for a specific workspace

## postWorkspaceEvents

Sends an array of events to be stored for a particular workspace.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setWorkspaceID('string')
    ->setSecurity($security)->build();

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

