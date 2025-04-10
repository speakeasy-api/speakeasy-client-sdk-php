# SDK

## Overview

Speakeasy API: The Subscriptions API manages subscriptions for CLI and registry events

The Speakeasy Platform Documentation
</docs>

### Available Operations

* [createPublishingToken](#createpublishingtoken) - Create a publishing token for a workspace
* [deletePublishingToken](#deletepublishingtoken) - Delete a specific publishing token
* [getPublishingTokenByID](#getpublishingtokenbyid) - Get a specific publishing token
* [getPublishingTokenTargetByID](#getpublishingtokentargetbyid) - Get a specific publishing token target
* [updatePublishingTokenExpiration](#updatepublishingtokenexpiration) - Updates the validitity period of a publishing token

## createPublishingToken

Creates a publishing token for the current workspace

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;
use Speakeasy\SpeakeasyClientSDK\Utils;

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            apiKey: '<YOUR_API_KEY_HERE>',
        )
    )
    ->build();

$request = new Shared\PublishingToken(
    createdAt: Utils\Utils::parseDateTime('2025-10-25T02:17:15.413Z'),
    id: '<id>',
    targetId: '<id>',
    targetResource: '<value>',
    token: '<value>',
);

$response = $sdk->createPublishingToken(
    request: $request
);

if ($response->publishingToken !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                        | Type                                                             | Required                                                         | Description                                                      |
| ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- |
| `$request`                                                       | [Shared\PublishingToken](../../Models/Shared/PublishingToken.md) | :heavy_check_mark:                                               | The request object to use for the request.                       |

### Response

**[?Operations\CreatePublishingTokenResponse](../../Models/Operations/CreatePublishingTokenResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errorors\Error         | 4XX                    | application/json       |
| Errorors\SDKExceptioon | 5XX                    | \*/\*                  |

## deletePublishingToken

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

$response = $sdk->deletePublishingToken(
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

## getPublishingTokenByID

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

$response = $sdk->getPublishingTokenByID(
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

## getPublishingTokenTargetByID

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

$response = $sdk->getPublishingTokenTargetByID(
    request: $request
);

if ($response->object !== null) {
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

## updatePublishingTokenExpiration

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

$response = $sdk->updatePublishingTokenExpiration(
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