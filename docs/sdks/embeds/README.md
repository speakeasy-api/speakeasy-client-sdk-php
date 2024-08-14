# Embeds


## Overview

REST APIs for managing embeds

### Available Operations

* [getEmbedAccessToken](#getembedaccesstoken) - Get an embed access token for the current workspace.
* [getValidEmbedAccessTokens](#getvalidembedaccesstokens) - Get all valid embed access tokens for the current workspace.
* [revokeEmbedAccessToken](#revokeembedaccesstoken) - Revoke an embed access EmbedToken.

## getEmbedAccessToken

Returns an embed access token for the current workspace. This can be used to authenticate access to externally embedded content.
Filters can be applied allowing views to be filtered to things like particular customerIds.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetEmbedAccessTokenRequest(
        description: 'Versatile asynchronous leverage',
        duration: 554373,
        filters: new Shared\Filters(
            filters: [
                new Shared\Filter,
            ],
            limit: 263313,
            offset: 411277,
            operator: '<value>',
        ),
    );
    $response = $sdk->embeds->getEmbedAccessToken($request);

    if ($response->embedAccessTokenResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetEmbedAccessTokenRequest](../../Models/Operations/GetEmbedAccessTokenRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |


### Response

**[?Operations\GetEmbedAccessTokenResponse](../../Models/Operations/GetEmbedAccessTokenResponse.md)**
### Errors

| Error Object                                            | Status Code                                             | Content Type                                            |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| Speakeasy\SpeakeasyClientSDK\Models\Errors.SDKException | 4xx-5xx                                                 | */*                                                     |

## getValidEmbedAccessTokens

Get all valid embed access tokens for the current workspace.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

try {
    $response = $sdk->embeds->getValidEmbedAccessTokens();

    if ($response->embedTokens !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```




### Response

**[?Operations\GetValidEmbedAccessTokensResponse](../../Models/Operations/GetValidEmbedAccessTokensResponse.md)**
### Errors

| Error Object                                            | Status Code                                             | Content Type                                            |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| Speakeasy\SpeakeasyClientSDK\Models\Errors.SDKException | 4xx-5xx                                                 | */*                                                     |

## revokeEmbedAccessToken

Revoke an embed access EmbedToken.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\RevokeEmbedAccessTokenRequest(
        tokenID: '<value>',
    );
    $response = $sdk->embeds->revokeEmbedAccessToken($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\RevokeEmbedAccessTokenRequest](../../Models/Operations/RevokeEmbedAccessTokenRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?Operations\RevokeEmbedAccessTokenResponse](../../Models/Operations/RevokeEmbedAccessTokenResponse.md)**
### Errors

| Error Object                                            | Status Code                                             | Content Type                                            |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| Speakeasy\SpeakeasyClientSDK\Models\Errors.SDKException | 4xx-5xx                                                 | */*                                                     |
