# Workspaces

## Overview

### Available Operations

* [getWorkspace](#getworkspace) - Get workspace
* [getWorkspaceByContext](#getworkspacebycontext) - Get workspace by context
* [getWorkspaceFeatureFlags](#getworkspacefeatureflags) - Get workspace feature flags

## getWorkspace

Get information about a particular workspace.

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
    $request = new Operations\GetWorkspaceRequest();
    $response = $sdk->workspaces->getWorkspace($request);

    if ($response->workspace !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetWorkspaceRequest](../../Models/Operations/GetWorkspaceRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\GetWorkspaceResponse](../../Models/Operations/GetWorkspaceResponse.md)**

### Errors

| Error Object                                              | Status Code                                               | Content Type                                              |
| --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- |
| Speakeasy\SpeakeasyClientSDK\Models\Errorors.SDKException | 4xx-5xx                                                   | */*                                                       |


## getWorkspaceByContext

Get information about a particular workspace by context.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security(
    apiKey: "<YOUR_API_KEY_HERE>",
);

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

try {
    $response = $sdk->workspaces->getWorkspaceByContext();

    if ($response->workspaceAndOrganization !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Response

**[?Operations\GetWorkspaceByContextResponse](../../Models/Operations/GetWorkspaceByContextResponse.md)**

### Errors

| Error Object                                              | Status Code                                               | Content Type                                              |
| --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- |
| Speakeasy\SpeakeasyClientSDK\Models\Errorors.SDKException | 4xx-5xx                                                   | */*                                                       |


## getWorkspaceFeatureFlags

Get workspace feature flags

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
    $request = new Operations\GetWorkspaceFeatureFlagsRequest();
    $response = $sdk->workspaces->getWorkspaceFeatureFlags($request);

    if ($response->workspaceFeatureFlagResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\GetWorkspaceFeatureFlagsRequest](../../Models/Operations/GetWorkspaceFeatureFlagsRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\GetWorkspaceFeatureFlagsResponse](../../Models/Operations/GetWorkspaceFeatureFlagsResponse.md)**

### Errors

| Error Object                                              | Status Code                                               | Content Type                                              |
| --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- |
| Errorors\Error                                            | 5XX                                                       | application/json                                          |
| Speakeasy\SpeakeasyClientSDK\Models\Errorors.SDKException | 4xx-5xx                                                   | */*                                                       |
