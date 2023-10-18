# ApiEndpoints
(*apiEndpoints*)

## Overview

REST APIs for managing ApiEndpoint entities

### Available Operations

* [deleteApiEndpoint](#deleteapiendpoint) - Delete an ApiEndpoint.
* [findApiEndpoint](#findapiendpoint) - Find an ApiEndpoint via its displayName.
* [generateOpenApiSpecForApiEndpoint](#generateopenapispecforapiendpoint) - Generate an OpenAPI specification for a particular ApiEndpoint.
* [generatePostmanCollectionForApiEndpoint](#generatepostmancollectionforapiendpoint) - Generate a Postman collection for a particular ApiEndpoint.
* [getAllApiEndpoints](#getallapiendpoints) - Get all Api endpoints for a particular apiID.
* [getAllForVersionApiEndpoints](#getallforversionapiendpoints) - Get all ApiEndpoints for a particular apiID and versionID.
* [getApiEndpoint](#getapiendpoint) - Get an ApiEndpoint.
* [upsertApiEndpoint](#upsertapiendpoint) - Upsert an ApiEndpoint.

## deleteApiEndpoint

Delete an ApiEndpoint. This will also delete all associated Request Logs (if using a Postgres datastore).

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteApiEndpointRequest;

$security = new Security();
$security->apiKey = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteApiEndpointRequest();
    $request->apiEndpointID = 'blue';
    $request->apiID = 'Gasoline';
    $request->versionID = 'Southwest';

    $response = $sdk->apiEndpoints->deleteApiEndpoint($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteApiEndpointRequest](../../models/operations/DeleteApiEndpointRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteApiEndpointResponse](../../models/operations/DeleteApiEndpointResponse.md)**


## findApiEndpoint

Find an ApiEndpoint via its displayName (set by operationId from a registered OpenAPI schema).
This is useful for finding the ID of an ApiEndpoint to use in the /v1/apis/{apiID}/version/{versionID}/api_endpoints/{apiEndpointID} endpoints.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\FindApiEndpointRequest;

$security = new Security();
$security->apiKey = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new FindApiEndpointRequest();
    $request->apiID = 'Cotton';
    $request->displayName = 'Chief';
    $request->versionID = 'Wooden';

    $response = $sdk->apiEndpoints->findApiEndpoint($request);

    if ($response->apiEndpoint !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\FindApiEndpointRequest](../../models/operations/FindApiEndpointRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\FindApiEndpointResponse](../../models/operations/FindApiEndpointResponse.md)**


## generateOpenApiSpecForApiEndpoint

This endpoint will generate a new operation in any registered OpenAPI document if the operation does not already exist in the document.
Returns the original document and the newly generated document allowing a diff to be performed to see what has changed.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\GenerateOpenApiSpecForApiEndpointRequest;

$security = new Security();
$security->apiKey = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GenerateOpenApiSpecForApiEndpointRequest();
    $request->apiEndpointID = 'Mazda';
    $request->apiID = 'web';
    $request->versionID = 'explicabo';

    $response = $sdk->apiEndpoints->generateOpenApiSpecForApiEndpoint($request);

    if ($response->generateOpenApiSpecDiff !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                       | Type                                                                                                                                                            | Required                                                                                                                                                        | Description                                                                                                                                                     |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                      | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\GenerateOpenApiSpecForApiEndpointRequest](../../models/operations/GenerateOpenApiSpecForApiEndpointRequest.md) | :heavy_check_mark:                                                                                                                                              | The request object to use for the request.                                                                                                                      |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GenerateOpenApiSpecForApiEndpointResponse](../../models/operations/GenerateOpenApiSpecForApiEndpointResponse.md)**


## generatePostmanCollectionForApiEndpoint

Generates a postman collection that allows the endpoint to be called from postman variables produced for any path/query/header parameters included in the OpenAPI document.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\GeneratePostmanCollectionForApiEndpointRequest;

$security = new Security();
$security->apiKey = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GeneratePostmanCollectionForApiEndpointRequest();
    $request->apiEndpointID = 'indigo';
    $request->apiID = 'barring';
    $request->versionID = 'Senior';

    $response = $sdk->apiEndpoints->generatePostmanCollectionForApiEndpoint($request);

    if ($response->postmanCollection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                   | Type                                                                                                                                                                        | Required                                                                                                                                                                    | Description                                                                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                  | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\GeneratePostmanCollectionForApiEndpointRequest](../../models/operations/GeneratePostmanCollectionForApiEndpointRequest.md) | :heavy_check_mark:                                                                                                                                                          | The request object to use for the request.                                                                                                                                  |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GeneratePostmanCollectionForApiEndpointResponse](../../models/operations/GeneratePostmanCollectionForApiEndpointResponse.md)**


## getAllApiEndpoints

Get all Api endpoints for a particular apiID.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllApiEndpointsRequest;

$security = new Security();
$security->apiKey = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetAllApiEndpointsRequest();
    $request->apiID = 'unless';

    $response = $sdk->apiEndpoints->getAllApiEndpoints($request);

    if ($response->apiEndpoints !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllApiEndpointsRequest](../../models/operations/GetAllApiEndpointsRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllApiEndpointsResponse](../../models/operations/GetAllApiEndpointsResponse.md)**


## getAllForVersionApiEndpoints

Get all ApiEndpoints for a particular apiID and versionID.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllForVersionApiEndpointsRequest;

$security = new Security();
$security->apiKey = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetAllForVersionApiEndpointsRequest();
    $request->apiID = 'now';
    $request->versionID = 'Diesel';

    $response = $sdk->apiEndpoints->getAllForVersionApiEndpoints($request);

    if ($response->apiEndpoints !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                             | Type                                                                                                                                                  | Required                                                                                                                                              | Description                                                                                                                                           |
| ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                            | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllForVersionApiEndpointsRequest](../../models/operations/GetAllForVersionApiEndpointsRequest.md) | :heavy_check_mark:                                                                                                                                    | The request object to use for the request.                                                                                                            |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllForVersionApiEndpointsResponse](../../models/operations/GetAllForVersionApiEndpointsResponse.md)**


## getApiEndpoint

Get an ApiEndpoint.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetApiEndpointRequest;

$security = new Security();
$security->apiKey = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetApiEndpointRequest();
    $request->apiEndpointID = 'flog';
    $request->apiID = 'synthesize';
    $request->versionID = 'Barium';

    $response = $sdk->apiEndpoints->getApiEndpoint($request);

    if ($response->apiEndpoint !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetApiEndpointRequest](../../models/operations/GetApiEndpointRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetApiEndpointResponse](../../models/operations/GetApiEndpointResponse.md)**


## upsertApiEndpoint

Upsert an ApiEndpoint. If the ApiEndpoint does not exist it will be created, otherwise it will be updated.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\UpsertApiEndpointRequest;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\ApiEndpointInput;

$security = new Security();
$security->apiKey = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpsertApiEndpointRequest();
    $request->apiEndpointInput = new ApiEndpointInput();
    $request->apiEndpointInput->apiEndpointId = 'Facilitator';
    $request->apiEndpointInput->description = 'Cross-group bottom-line productivity';
    $request->apiEndpointInput->displayName = 'nor';
    $request->apiEndpointInput->method = 'Northwest';
    $request->apiEndpointInput->path = '/private';
    $request->apiEndpointInput->versionId = 'what';
    $request->apiEndpointID = 'Trans';
    $request->apiID = 'Kia';
    $request->versionID = 'Electronic';

    $response = $sdk->apiEndpoints->upsertApiEndpoint($request);

    if ($response->apiEndpoint !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\UpsertApiEndpointRequest](../../models/operations/UpsertApiEndpointRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\UpsertApiEndpointResponse](../../models/operations/UpsertApiEndpointResponse.md)**

