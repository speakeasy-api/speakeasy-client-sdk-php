# Suggest
(*suggest*)

## Overview

REST APIs for managing LLM OAS suggestions

### Available Operations

* [suggest](#suggest) - Generate suggestions for improving an OpenAPI document.
* [suggestOpenAPI](#suggestopenapi) - (DEPRECATED) Generate suggestions for improving an OpenAPI document.
* [suggestOpenAPIRegistry](#suggestopenapiregistry) - Generate suggestions for improving an OpenAPI document stored in the registry.

## suggest

Get suggestions from an LLM model for improving an OpenAPI document.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security(
    apiKey: '<YOUR_API_KEY_HERE>',
);

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();
try {
    $request = new Operations\SuggestRequest(
        suggestRequestBody: new Shared\SuggestRequestBody(
            diagnostics: [
                new Shared\Diagnostic(
                    message: '<value>',
                    path: [
                        '/rescue',
                    ],
                    type: '<value>',
                ),
            ],
            oasSummary: new Shared\OASSummary(
                info: new Shared\OASInfo(
                    description: 'kielbasa psst stitcher cannon devoted blindly apropos low',
                    license: new Shared\License(),
                    summary: '<value>',
                    title: '<value>',
                    version: '<value>',
                ),
                operations: [
                    new Shared\OASOperation(
                        description: 'via apparatus gray whether opposite what',
                        method: '<value>',
                        operationId: '<id>',
                        path: '/sys',
                        tags: [
                            '<value>',
                        ],
                    ),
                ],
            ),
            suggestionType: Shared\SuggestRequestBodySuggestionType::MethodNames,
        ),
        xSessionId: '<id>',
    );
    $response = $sdk.suggest->suggest(
        request: $request
    );

    if ($response->schema !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                              | Type                                                                   | Required                                                               | Description                                                            |
| ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- |
| `$request`                                                             | [Operations\SuggestRequest](../../Models/Operations/SuggestRequest.md) | :heavy_check_mark:                                                     | The request object to use for the request.                             |

### Response

**[?Operations\SuggestResponse](../../Models/Operations/SuggestResponse.md)**

### Errors

| Error Object                                              | Status Code                                               | Content Type                                              |
| --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- |
| Speakeasy\SpeakeasyClientSDK\Models\Errorors.SDKException | 4xx-5xx                                                   | */*                                                       |


## suggestOpenAPI

Get suggestions from an LLM model for improving an OpenAPI document.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security(
    apiKey: '<YOUR_API_KEY_HERE>',
);

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();
try {
    $request = new Operations\SuggestOpenAPIRequest(
        requestBody: new Operations\SuggestOpenAPIRequestBody(
            schema: new Operations\Schema(
                content: '0x0beEcB7cF6',
                fileName: 'example.file',
            ),
        ),
        xSessionId: '<id>',
    );
    $response = $sdk.suggest->suggestOpenAPI(
        request: $request
    );

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

| Error Object                                              | Status Code                                               | Content Type                                              |
| --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- |
| Speakeasy\SpeakeasyClientSDK\Models\Errorors.SDKException | 4xx-5xx                                                   | */*                                                       |


## suggestOpenAPIRegistry

Get suggestions from an LLM model for improving an OpenAPI document stored in the registry.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security(
    apiKey: '<YOUR_API_KEY_HERE>',
);

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();
try {
    $request = new Operations\SuggestOpenAPIRegistryRequest(
        namespaceName: '<value>',
        revisionReference: '<value>',
        xSessionId: '<id>',
    );
    $response = $sdk.suggest->suggestOpenAPIRegistry(
        request: $request
    );

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

| Error Object                                              | Status Code                                               | Content Type                                              |
| --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- |
| Speakeasy\SpeakeasyClientSDK\Models\Errorors.SDKException | 4xx-5xx                                                   | */*                                                       |
