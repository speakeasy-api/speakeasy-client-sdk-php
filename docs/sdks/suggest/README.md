# Suggest


## Overview

REST APIs for managing LLM OAS suggestions

### Available Operations

* [applyOperationIDs](#applyoperationids) - Apply operation ID suggestions and download result.
* [suggestOperationIDs](#suggestoperationids) - Generate operation ID suggestions.
* [suggestOperationIDsRegistry](#suggestoperationidsregistry) - Generate operation ID suggestions.

## applyOperationIDs

Apply operation ID suggestions and download result.

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
    $request = new Operations\ApplyOperationIDsRequest(
        xSessionId: '<value>',
        requestBody: new Operations\ApplyOperationIDsRequestBody(
            asOverlay: false,
        ),
    );
    $response = $sdk->suggest->applyOperationIDs($request);

    if ($response->twoHundredApplicationJsonSchema !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ApplyOperationIDsRequest](../../Models/Operations/ApplyOperationIDsRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |


### Response

**[?Operations\ApplyOperationIDsResponse](../../Models/Operations/ApplyOperationIDsResponse.md)**
### Errors

| Error Object                                            | Status Code                                             | Content Type                                            |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| Speakeasy\SpeakeasyClientSDK\Models\Errors.SDKException | 4xx-5xx                                                 | */*                                                     |

## suggestOperationIDs

Get suggestions from an LLM model for improving the operationIDs in the provided schema.

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
    $request = new Operations\SuggestOperationIDsRequest(
        requestBody: new Operations\SuggestOperationIDsRequestBody(
            schema: new Operations\Schema(
                content: '0xb2de88c98a',
                fileName: 'your_file_here',
            ),
            opts: new Shared\SuggestOperationIDsOpts(
                depthStyle: Shared\DepthStyle::Nested,
                style: Shared\Style::Resource,
            ),
        ),
        xSessionId: '<value>',
        limit: 5704.42,
    );
    $response = $sdk->suggest->suggestOperationIDs($request);

    if ($response->suggestedOperationIDs !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\SuggestOperationIDsRequest](../../Models/Operations/SuggestOperationIDsRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |


### Response

**[?Operations\SuggestOperationIDsResponse](../../Models/Operations/SuggestOperationIDsResponse.md)**
### Errors

| Error Object                                            | Status Code                                             | Content Type                                            |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| Speakeasy\SpeakeasyClientSDK\Models\Errors.SDKException | 4xx-5xx                                                 | */*                                                     |

## suggestOperationIDsRegistry

Get suggestions from an LLM model for improving the operationIDs in the provided schema.

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
    $request = new Operations\SuggestOperationIDsRegistryRequest(
        namespaceName: '<value>',
        revisionReference: '<value>',
        xSessionId: '<value>',
        suggestOperationIDsOpts: new Shared\SuggestOperationIDsOpts(
            depthStyle: Shared\DepthStyle::Deep,
            style: Shared\Style::Standardize,
        ),
        limit: 4536.53,
    );
    $response = $sdk->suggest->suggestOperationIDsRegistry($request);

    if ($response->suggestedOperationIDs !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\SuggestOperationIDsRegistryRequest](../../Models/Operations/SuggestOperationIDsRegistryRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |


### Response

**[?Operations\SuggestOperationIDsRegistryResponse](../../Models/Operations/SuggestOperationIDsRegistryResponse.md)**
### Errors

| Error Object                                            | Status Code                                             | Content Type                                            |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| Speakeasy\SpeakeasyClientSDK\Models\Errors.SDKException | 4xx-5xx                                                 | */*                                                     |
