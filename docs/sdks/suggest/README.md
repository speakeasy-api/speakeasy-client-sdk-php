# Suggest
(*suggest*)

## Overview

REST APIs for managing LLM OAS suggestions

### Available Operations

* [suggest](#suggest) - Generate suggestions for improving an OpenAPI document.
* [suggestItems](#suggestitems) - Generate generic suggestions for a list of items.
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

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            apiKey: '<YOUR_API_KEY_HERE>',
        )
    )
    ->build();

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

$response = $sdk->suggest->suggest(
    request: $request
);

if ($response->schema !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                              | Type                                                                   | Required                                                               | Description                                                            |
| ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- |
| `$request`                                                             | [Operations\SuggestRequest](../../Models/Operations/SuggestRequest.md) | :heavy_check_mark:                                                     | The request object to use for the request.                             |

### Response

**[?Operations\SuggestResponse](../../Models/Operations/SuggestResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errorors\SDKExceptioon | 4XX, 5XX               | \*/\*                  |

## suggestItems

Generate generic suggestions for a list of items.

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

$request = new Shared\SuggestItemsRequestBody(
    items: [
        '<value>',
    ],
    prompt: '<value>',
);

$response = $sdk->suggest->suggestItems(
    request: $request
);

if ($response->strings !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Shared\SuggestItemsRequestBody](../../Models/Shared/SuggestItemsRequestBody.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\SuggestItemsResponse](../../Models/Operations/SuggestItemsResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errorors\SDKExceptioon | 4XX, 5XX               | \*/\*                  |

## suggestOpenAPI

Get suggestions from an LLM model for improving an OpenAPI document.

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

$request = new Operations\SuggestOpenAPIRequest(
    requestBody: new Operations\SuggestOpenAPIRequestBody(
        schema: new Operations\Schema(
            content: '0x0beEcB7cF6',
            fileName: 'example.file',
        ),
    ),
    xSessionId: '<id>',
);

$response = $sdk->suggest->suggestOpenAPI(
    request: $request
);

if ($response->schema !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\SuggestOpenAPIRequest](../../Models/Operations/SuggestOpenAPIRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\SuggestOpenAPIResponse](../../Models/Operations/SuggestOpenAPIResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errorors\SDKExceptioon | 4XX, 5XX               | \*/\*                  |

## suggestOpenAPIRegistry

Get suggestions from an LLM model for improving an OpenAPI document stored in the registry.

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

$request = new Operations\SuggestOpenAPIRegistryRequest(
    namespaceName: '<value>',
    revisionReference: '<value>',
    xSessionId: '<id>',
);

$response = $sdk->suggest->suggestOpenAPIRegistry(
    request: $request
);

if ($response->schema !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\SuggestOpenAPIRegistryRequest](../../Models/Operations/SuggestOpenAPIRegistryRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\SuggestOpenAPIRegistryResponse](../../Models/Operations/SuggestOpenAPIRegistryResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errorors\SDKExceptioon | 4XX, 5XX               | \*/\*                  |