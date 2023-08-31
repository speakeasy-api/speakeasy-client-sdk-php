# apis

## Overview

REST APIs for managing Api entities

### Available Operations

* [deleteApi](#deleteapi) - Delete an Api.
* [generateOpenApiSpec](#generateopenapispec) - Generate an OpenAPI specification for a particular Api.
* [generatePostmanCollection](#generatepostmancollection) - Generate a Postman collection for a particular Api.
* [getAllApiVersions](#getallapiversions) - Get all Api versions for a particular ApiEndpoint.
* [getApis](#getapis) - Get a list of Apis for a given workspace
* [upsertApi](#upsertapi) - Upsert an Api

## deleteApi

Delete a particular version of an Api. The will also delete all associated ApiEndpoints, Metadata, Schemas & Request Logs (if using a Postgres datastore).

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteApiRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new DeleteApiRequest();
    $request->apiID = 'quod';
    $request->versionID = 'esse';

    $response = $sdk->apis->deleteApi($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteApiRequest](../../models/operations/DeleteApiRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteApiResponse](../../models/operations/DeleteApiResponse.md)**


## generateOpenApiSpec

This endpoint will generate any missing operations in any registered OpenAPI document if the operation does not already exist in the document.
Returns the original document and the newly generated document allowing a diff to be performed to see what has changed.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\GenerateOpenApiSpecRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GenerateOpenApiSpecRequest();
    $request->apiID = 'totam';
    $request->versionID = 'porro';

    $response = $sdk->apis->generateOpenApiSpec($request);

    if ($response->generateOpenApiSpecDiff !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\GenerateOpenApiSpecRequest](../../models/operations/GenerateOpenApiSpecRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GenerateOpenApiSpecResponse](../../models/operations/GenerateOpenApiSpecResponse.md)**


## generatePostmanCollection

Generates a postman collection containing all endpoints for a particular API. Includes variables produced for any path/query/header parameters included in the OpenAPI document.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\GeneratePostmanCollectionRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GeneratePostmanCollectionRequest();
    $request->apiID = 'dolorum';
    $request->versionID = 'dicta';

    $response = $sdk->apis->generatePostmanCollection($request);

    if ($response->postmanCollection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\GeneratePostmanCollectionRequest](../../models/operations/GeneratePostmanCollectionRequest.md) | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GeneratePostmanCollectionResponse](../../models/operations/GeneratePostmanCollectionResponse.md)**


## getAllApiVersions

Get all Api versions for a particular ApiEndpoint.
Supports filtering the versions based on metadata attributes.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllApiVersionsRequest;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllApiVersionsOp;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetAllApiVersionsRequest();
    $request->apiID = 'nam';
    $request->metadata = [
        'occaecati' => [
            'deleniti',
        ],
        'hic' => [
            'totam',
            'beatae',
            'commodi',
            'molestiae',
        ],
        'modi' => [
            'impedit',
        ],
    ];
    $request->op = new GetAllApiVersionsOp();
    $request->op->and = false;

    $response = $sdk->apis->getAllApiVersions($request);

    if ($response->apis !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllApiVersionsRequest](../../models/operations/GetAllApiVersionsRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllApiVersionsResponse](../../models/operations/GetAllApiVersionsResponse.md)**


## getApis

Get a list of all Apis and their versions for a given workspace.
Supports filtering the APIs based on metadata attributes.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetApisRequest;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetApisOp;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetApisRequest();
    $request->metadata = [
        'esse' => [
            'excepturi',
        ],
        'aspernatur' => [
            'ad',
        ],
        'natus' => [
            'iste',
        ],
    ];
    $request->op = new GetApisOp();
    $request->op->and = false;

    $response = $sdk->apis->getApis($request);

    if ($response->apis !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetApisRequest](../../models/operations/GetApisRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetApisResponse](../../models/operations/GetApisResponse.md)**


## upsertApi

Upsert an Api. If the Api does not exist, it will be created.
If the Api exists, it will be updated.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\UpsertApiRequest;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\ApiInput;

$sdk = SDK::builder()
    ->build();

try {
    $request = new UpsertApiRequest();
    $request->apiInput = new ApiInput();
    $request->apiInput->apiId = 'dolor';
    $request->apiInput->description = 'natus';
    $request->apiInput->metaData = [
        'hic' => [
            'fuga',
            'in',
            'corporis',
            'iste',
        ],
        'iure' => [
            'quidem',
            'architecto',
            'ipsa',
            'reiciendis',
        ],
    ];
    $request->apiInput->versionId = 'est';
    $request->apiID = 'mollitia';

    $response = $sdk->apis->upsertApi($request);

    if ($response->api !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\UpsertApiRequest](../../models/operations/UpsertApiRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\UpsertApiResponse](../../models/operations/UpsertApiResponse.md)**
