# Suggest

## Overview

REST APIs for managing LLM OAS suggestions

### Available Operations

* [applyOperationIDs](#applyoperationids) - Apply operation ID suggestions and download result.
* [suggestOpenAPI](#suggestopenapi) - Generate suggestions for improving an OpenAPI document.
* [suggestOpenAPIRegistry](#suggestopenapiregistry) - Generate suggestions for improving an OpenAPI document stored in the registry.

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


## suggestOpenAPI

Get suggestions from an LLM model for improving an OpenAPI document.

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
    $request = new Operations\SuggestOpenAPIRequest(
        requestBody: new Operations\SuggestOpenAPIRequestBody(
            schema: new Operations\Schema(
                content: '0x0FbfeAEcc8',
                fileName: 'your_file_here',
            ),
            opts: new Shared\SuggestOpts(
                suggestionType: Shared\SuggestionType::DiagnosticsOnly,
                diagnostics: [
                    new Shared\Diagnostic,
                ],
            ),
        ),
        xSessionId: '<value>',
    );
    $response = $sdk->suggest->suggestOpenAPI($request);

    if ($response->schema !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\SuggestOpenAPIRequest](../../Models/Operations/SuggestOpenAPIRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\SuggestOpenAPIResponse](../../Models/Operations/SuggestOpenAPIResponse.md)**

### Errors

| Error Object                                            | Status Code                                             | Content Type                                            |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| Speakeasy\SpeakeasyClientSDK\Models\Errors.SDKException | 4xx-5xx                                                 | */*                                                     |


## suggestOpenAPIRegistry

Get suggestions from an LLM model for improving an OpenAPI document stored in the registry.

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
    $request = new Operations\SuggestOpenAPIRegistryRequest(
        namespaceName: '<value>',
        revisionReference: '<value>',
        xSessionId: '<value>',
        suggestOpts: new Shared\SuggestOpts(
            suggestionType: Shared\SuggestionType::MethodNames,
            diagnostics: [
                new Shared\Diagnostic,
            ],
        ),
    );
    $response = $sdk->suggest->suggestOpenAPIRegistry($request);

    if ($response->schema !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\SuggestOpenAPIRegistryRequest](../../Models/Operations/SuggestOpenAPIRegistryRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\SuggestOpenAPIRegistryResponse](../../Models/Operations/SuggestOpenAPIRegistryResponse.md)**

### Errors

| Error Object                                            | Status Code                                             | Content Type                                            |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| Speakeasy\SpeakeasyClientSDK\Models\Errors.SDKException | 4xx-5xx                                                 | */*                                                     |
