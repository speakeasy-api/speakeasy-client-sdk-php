# PublishingTokens
(*publishingTokens*)

## Overview

### Available Operations

* [create](#create) - Create a publishing token for a workspace
* [delete](#delete) - Delete a specific publishing token
* [get](#get) - Get a specific publishing token
* [list](#list) - Get publishing tokens for a workspace
* [resolveMetadata](#resolvemetadata) - Get metadata about the token
* [resolveTarget](#resolvetarget) - Get a specific publishing token target
* [update](#update) - Updates the validitity period of a publishing token

## create

Creates a publishing token for the current workspace

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;
use Speakeasy\SpeakeasyClientSDK\Utils;

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            apiKey: '<YOUR_API_KEY_HERE>',
        )
    )
    ->build();

$request = new Operations\CreatePublishingTokenRequestBody(
    targetId: '<id>',
    targetResource: '<value>',
    tokenName: '<value>',
    validUntil: Utils\Utils::parseDateTime('2024-06-17T07:14:55.338Z'),
);

$response = $sdk->publishingTokens->create(
    request: $request
);

if ($response->publishingToken !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\CreatePublishingTokenRequestBody](../../Models/Operations/CreatePublishingTokenRequestBody.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\CreatePublishingTokenResponse](../../Models/Operations/CreatePublishingTokenResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errorors\Error         | 4XX                    | application/json       |
| Errorors\SDKExceptioon | 5XX                    | \*/\*                  |

## delete

Delete a particular publishing token.

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

$request = new Operations\DeletePublishingTokenRequest(
    tokenID: '<id>',
);

$response = $sdk->publishingTokens->delete(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\DeletePublishingTokenRequest](../../Models/Operations/DeletePublishingTokenRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\DeletePublishingTokenResponse](../../Models/Operations/DeletePublishingTokenResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errorors\Error         | 4XX                    | application/json       |
| Errorors\SDKExceptioon | 5XX                    | \*/\*                  |

## get

Get information about a particular publishing token.

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

$request = new Operations\GetPublishingTokenByIDRequest(
    tokenID: '<id>',
);

$response = $sdk->publishingTokens->get(
    request: $request
);

if ($response->publishingToken !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\GetPublishingTokenByIDRequest](../../Models/Operations/GetPublishingTokenByIDRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\GetPublishingTokenByIDResponse](../../Models/Operations/GetPublishingTokenByIDResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errorors\Error         | 4XX                    | application/json       |
| Errorors\SDKExceptioon | 5XX                    | \*/\*                  |

## list

Returns a publishing token for the current workspace

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



$response = $sdk->publishingTokens->list(

);

if ($response->classes !== null) {
    // handle response
}
```

### Response

**[?Operations\GetPublishingTokenResponse](../../Models/Operations/GetPublishingTokenResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errorors\Error         | 4XX                    | application/json       |
| Errorors\SDKExceptioon | 5XX                    | \*/\*                  |

## resolveMetadata

Get information about a particular publishing token.

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

$request = new Operations\GetPublishingTokenPublicMetadataRequest(
    tokenID: '<id>',
);

$response = $sdk->publishingTokens->resolveMetadata(
    request: $request
);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [Operations\GetPublishingTokenPublicMetadataRequest](../../Models/Operations/GetPublishingTokenPublicMetadataRequest.md) | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |

### Response

**[?Operations\GetPublishingTokenPublicMetadataResponse](../../Models/Operations/GetPublishingTokenPublicMetadataResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errorors\Error         | 4XX                    | application/json       |
| Errorors\SDKExceptioon | 5XX                    | \*/\*                  |

## resolveTarget

Get information about a particular publishing token target.

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

$request = new Operations\GetPublishingTokenTargetByIDRequest(
    tokenID: '<id>',
);

$response = $sdk->publishingTokens->resolveTarget(
    request: $request
);

if ($response->res !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\GetPublishingTokenTargetByIDRequest](../../Models/Operations/GetPublishingTokenTargetByIDRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\GetPublishingTokenTargetByIDResponse](../../Models/Operations/GetPublishingTokenTargetByIDResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errorors\Error         | 4XX                    | application/json       |
| Errorors\SDKExceptioon | 5XX                    | \*/\*                  |

## update

Updates the validity period of a particular publishing token.

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

$request = new Operations\UpdatePublishingTokenExpirationRequest(
    tokenID: '<id>',
);

$response = $sdk->publishingTokens->update(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [Operations\UpdatePublishingTokenExpirationRequest](../../Models/Operations/UpdatePublishingTokenExpirationRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |

### Response

**[?Operations\UpdatePublishingTokenExpirationResponse](../../Models/Operations/UpdatePublishingTokenExpirationResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errorors\Error         | 4XX                    | application/json       |
| Errorors\SDKExceptioon | 5XX                    | \*/\*                  |