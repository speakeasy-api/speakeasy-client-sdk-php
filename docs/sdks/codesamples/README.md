# CodeSamples
(*codeSamples*)

## Overview

REST APIs for retrieving Code Samples

### Available Operations

* [generateCodeSamplePreview](#generatecodesamplepreview) - Generate Code Sample previews from a file and configuration parameters.
* [generateCodeSamplePreviewAsync](#generatecodesamplepreviewasync) - Initiate asynchronous Code Sample preview generation from a file and configuration parameters, receiving an async JobID response for polling.
* [getCodeSamplePreviewAsync](#getcodesamplepreviewasync) - Poll for the result of an asynchronous Code Sample preview generation.
* [get](#get) - Retrieve usage snippets

## generateCodeSamplePreview

This endpoint generates Code Sample previews from a file and configuration parameters.

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

$request = new Shared\CodeSampleSchemaInput(
    language: '<value>',
    schemaFile: new Shared\SchemaFile(
        content: '0xc3dD8BfBef',
        fileName: 'example.file',
    ),
);

$response = $sdk->codeSamples->generateCodeSamplePreview(
    request: $request
);

if ($response->usageSnippets !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Shared\CodeSampleSchemaInput](../../Models/Shared/CodeSampleSchemaInput.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\GenerateCodeSamplePreviewResponse](../../Models/Operations/GenerateCodeSamplePreviewResponse.md)**

### Errors

| Error Type       | Status Code      | Content Type     |
| ---------------- | ---------------- | ---------------- |
| Errorors\Error   | 4XX              | application/json |
| Errorors\Error   | 5XX              | application/json |

## generateCodeSamplePreviewAsync

This endpoint generates Code Sample previews from a file and configuration parameters, receiving an async JobID response for polling.

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

$request = new Shared\CodeSampleSchemaInput(
    language: '<value>',
    schemaFile: new Shared\SchemaFile(
        content: '0xED5CDd177E',
        fileName: 'example.file',
    ),
);

$response = $sdk->codeSamples->generateCodeSamplePreviewAsync(
    request: $request
);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Shared\CodeSampleSchemaInput](../../Models/Shared/CodeSampleSchemaInput.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\GenerateCodeSamplePreviewAsyncResponse](../../Models/Operations/GenerateCodeSamplePreviewAsyncResponse.md)**

### Errors

| Error Type       | Status Code      | Content Type     |
| ---------------- | ---------------- | ---------------- |
| Errorors\Error   | 4XX              | application/json |
| Errorors\Error   | 5XX              | application/json |

## getCodeSamplePreviewAsync

Poll for the result of an asynchronous Code Sample preview generation.

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

$request = new Operations\GetCodeSamplePreviewAsyncRequest(
    jobID: '<id>',
);

$response = $sdk->codeSamples->getCodeSamplePreviewAsync(
    request: $request
);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\GetCodeSamplePreviewAsyncRequest](../../Models/Operations/GetCodeSamplePreviewAsyncRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\GetCodeSamplePreviewAsyncResponse](../../Models/Operations/GetCodeSamplePreviewAsyncResponse.md)**

### Errors

| Error Type       | Status Code      | Content Type     |
| ---------------- | ---------------- | ---------------- |
| Errorors\Error   | 4XX              | application/json |
| Errorors\Error   | 5XX              | application/json |

## get

Retrieve usage snippets from an OpenAPI document stored in the registry. Supports filtering by language and operation ID.

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

$request = new Operations\GetCodeSamplesRequest(
    registryUrl: 'https://spec.speakeasy.com/my-org/my-workspace/my-source',
    languages: [
        'python',
        'javascript',
    ],
    methodPaths: [
        new Operations\MethodPaths(
            method: Shared\HttpMethod::Get,
            path: '/pets',
        ),
    ],
    operationIds: [
        'getPets',
    ],
);

$response = $sdk->codeSamples->get(
    request: $request
);

if ($response->usageSnippets !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetCodeSamplesRequest](../../Models/Operations/GetCodeSamplesRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetCodeSamplesResponse](../../Models/Operations/GetCodeSamplesResponse.md)**

### Errors

| Error Type            | Status Code           | Content Type          |
| --------------------- | --------------------- | --------------------- |
| Errorors\Error        | 4XX                   | application/json      |
| Errorors\SDKException | 5XX                   | \*/\*                 |