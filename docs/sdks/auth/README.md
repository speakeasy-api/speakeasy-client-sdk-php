# Auth
(*auth*)

## Overview

REST APIs for managing Authentication

### Available Operations

* [getAccess](#getaccess) - Get access allowances for a particular workspace
* [getAccessToken](#getaccesstoken) - Get or refresh an access token for the current workspace.
* [getUser](#getuser) - Get information about the current user.
* [validateApiKey](#validateapikey) - Validate the current api key.

## getAccess

Checks if generation is permitted for a particular run of the CLI

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            apiKey: '<YOUR_API_KEY_HERE>',
        )
    )
    ->build();

$request = new Operations\GetWorkspaceAccessRequest();

$response = $sdk->auth->getAccess(
    request: $request
);

if ($response->accessDetails !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetWorkspaceAccessRequest](../../Models/Operations/GetWorkspaceAccessRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetWorkspaceAccessResponse](../../Models/Operations/GetWorkspaceAccessResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errorors\SDKExceptioon | 4XX, 5XX               | \*/\*                  |

## getAccessToken

Get or refresh an access token for the current workspace.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;

$sdk = SpeakeasyClientSDK\SDK::builder()->build();

$request = new Operations\GetAccessTokenRequest(
    workspaceId: '<id>',
);

$response = $sdk->auth->getAccessToken(
    request: $request
);

if ($response->accessToken !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetAccessTokenRequest](../../Models/Operations/GetAccessTokenRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetAccessTokenResponse](../../Models/Operations/GetAccessTokenResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errorors\Error         | 4XX                    | application/json       |
| Errorors\SDKExceptioon | 5XX                    | \*/\*                  |

## getUser

Get information about the current user.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            apiKey: '<YOUR_API_KEY_HERE>',
        )
    )
    ->build();



$response = $sdk->auth->getUser(

);

if ($response->user !== null) {
    // handle response
}
```

### Response

**[?Operations\GetUserResponse](../../Models/Operations/GetUserResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errorors\Error         | 4XX                    | application/json       |
| Errorors\SDKExceptioon | 5XX                    | \*/\*                  |

## validateApiKey

Validate the current api key.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            apiKey: '<YOUR_API_KEY_HERE>',
        )
    )
    ->build();



$response = $sdk->auth->validateApiKey(

);

if ($response->apiKeyDetails !== null) {
    // handle response
}
```

### Response

**[?Operations\ValidateApiKeyResponse](../../Models/Operations/ValidateApiKeyResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errorors\Error         | 4XX                    | application/json       |
| Errorors\SDKExceptioon | 5XX                    | \*/\*                  |