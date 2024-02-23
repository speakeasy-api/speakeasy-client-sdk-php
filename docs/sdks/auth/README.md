# Auth


## Overview

REST APIs for managing Authentication

### Available Operations

* [getWorkspaceAccess](#getworkspaceaccess) - Get access allowances for a particular workspace
* [validateApiKey](#validateapikey) - Validate the current api key.

## getWorkspaceAccess

Checks if generation is permitted for a particular run of the CLI

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
    ->setWorkspaceID('<value>')
    ->setSecurity($security)->build();

try {
        $request = new Operations\GetWorkspaceAccessRequest();
    $request->genLockId = '<value>';
    $request->passive = false;
    $request->targetType = '<value>';;

    $response = $sdk->auth->getWorkspaceAccess($request);

    if ($response->accessDetails !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetWorkspaceAccessRequest](../../Models/Operations/GetWorkspaceAccessRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetWorkspaceAccessResponse](../../Models/Operations/GetWorkspaceAccessResponse.md)**


## validateApiKey

Validate the current api key.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setWorkspaceID('<value>')
    ->setSecurity($security)->build();

try {
    $response = $sdk->auth->validateApiKey();

    if ($response->apiKeyDetails !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\ValidateApiKeyResponse](../../Models/Operations/ValidateApiKeyResponse.md)**

