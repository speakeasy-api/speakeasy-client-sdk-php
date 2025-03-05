# SchemaStore
(*schemaStore*)

## Overview

### Available Operations

* [createSchemaStoreItem](#createschemastoreitem) - Create a schema in the schema store
* [getSchemaStoreItem](#getschemastoreitem) - Get a OAS schema from the schema store

## createSchemaStoreItem

Create a schema in the schema store

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

$request = new Operations\CreateSchemaStoreItemRequestBody(
    format: Operations\Format::Yaml,
    spec: '<value>',
);

$response = $sdk->schemaStore->createSchemaStoreItem(
    request: $request
);

if ($response->schemaStoreItem !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\CreateSchemaStoreItemRequestBody](../../Models/Operations/CreateSchemaStoreItemRequestBody.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\CreateSchemaStoreItemResponse](../../Models/Operations/CreateSchemaStoreItemResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errorors\Error         | 4XX                    | application/json       |
| Errorors\SDKExceptioon | 5XX                    | \*/\*                  |

## getSchemaStoreItem

Get a OAS schema from the schema store

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

$request = new Operations\GetSchemaStoreItemRequestBody();

$response = $sdk->schemaStore->getSchemaStoreItem(
    request: $request
);

if ($response->schemaStoreItem !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\GetSchemaStoreItemRequestBody](../../Models/Operations/GetSchemaStoreItemRequestBody.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\GetSchemaStoreItemResponse](../../Models/Operations/GetSchemaStoreItemResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errorors\Error         | 4XX                    | application/json       |
| Errorors\SDKExceptioon | 5XX                    | \*/\*                  |