# Workspaces


### Available Operations

* [getWorkspace](#getworkspace) - Get workspace

## getWorkspace

Get information about a particular workspace.

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
        $request = new Operations\GetWorkspaceRequest();;

    $response = $sdk->workspaces->getWorkspace($request);

    if ($response->workspace !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetWorkspaceRequest](../../Models/Operations/GetWorkspaceRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetWorkspaceResponse](../../Models/Operations/GetWorkspaceResponse.md)**

