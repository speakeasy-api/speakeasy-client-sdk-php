# Apis


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

use \Speakeasy\SpeakeasyClientSDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setWorkspaceID('string')
    ->setSecurity($security)->build();

try {
        $request = new Operations\DeleteApiRequest();
    $request->apiID = 'string';
    $request->versionID = 'string';;

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
| `$request`                                                                                                      | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteApiRequest](../../Models/Operations/DeleteApiRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteApiResponse](../../Models/Operations/DeleteApiResponse.md)**


## generateOpenApiSpec

This endpoint will generate any missing operations in any registered OpenAPI document if the operation does not already exist in the document.
Returns the original document and the newly generated document allowing a diff to be performed to see what has changed.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setWorkspaceID('string')
    ->setSecurity($security)->build();

try {
        $request = new Operations\GenerateOpenApiSpecRequest();
    $request->apiID = 'string';
    $request->versionID = 'string';;

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
| `$request`                                                                                                                          | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\GenerateOpenApiSpecRequest](../../Models/Operations/GenerateOpenApiSpecRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GenerateOpenApiSpecResponse](../../Models/Operations/GenerateOpenApiSpecResponse.md)**


## generatePostmanCollection

Generates a postman collection containing all endpoints for a particular API. Includes variables produced for any path/query/header parameters included in the OpenAPI document.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setWorkspaceID('string')
    ->setSecurity($security)->build();

try {
        $request = new Operations\GeneratePostmanCollectionRequest();
    $request->apiID = 'string';
    $request->versionID = 'string';;

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
| `$request`                                                                                                                                      | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\GeneratePostmanCollectionRequest](../../Models/Operations/GeneratePostmanCollectionRequest.md) | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GeneratePostmanCollectionResponse](../../Models/Operations/GeneratePostmanCollectionResponse.md)**


## getAllApiVersions

Get all Api versions for a particular ApiEndpoint.
Supports filtering the versions based on metadata attributes.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setWorkspaceID('string')
    ->setSecurity($security)->build();

try {
        $request = new Operations\GetAllApiVersionsRequest();
    $request->apiID = 'string';
    $request->metadata = [
        'azure' => [
            'string',
        ],
    ];
    $request->op = new Operations\Op();
    $request->op->and = false;;

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
| `$request`                                                                                                                      | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllApiVersionsRequest](../../Models/Operations/GetAllApiVersionsRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllApiVersionsResponse](../../Models/Operations/GetAllApiVersionsResponse.md)**


## getApis

Get a list of all Apis and their versions for a given workspace.
Supports filtering the APIs based on metadata attributes.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setWorkspaceID('string')
    ->setSecurity($security)->build();

try {
        $request = new Operations\GetApisRequest();
    $request->metadata = [
        'South' => [
            'string',
        ],
    ];
    $request->op = new Operations\QueryParamOp();
    $request->op->and = false;;

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
| `$request`                                                                                                  | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetApisRequest](../../Models/Operations/GetApisRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetApisResponse](../../Models/Operations/GetApisResponse.md)**


## upsertApi

Upsert an Api. If the Api does not exist, it will be created.
If the Api exists, it will be updated.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setWorkspaceID('string')
    ->setSecurity($security)->build();

try {
        $request = new Operations\UpsertApiRequest();
    $request->api = new Shared\ApiInput();
    $request->api->apiId = 'string';
    $request->api->description = 'Synchronised 5th generation knowledge user';
    $request->api->metaData = [
        'redefine' => [
            'string',
        ],
    ];
    $request->api->versionId = 'string';
    $request->apiID = 'string';;

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
| `$request`                                                                                                      | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\UpsertApiRequest](../../Models/Operations/UpsertApiRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\UpsertApiResponse](../../Models/Operations/UpsertApiResponse.md)**

