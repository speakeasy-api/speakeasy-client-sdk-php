# schemas

## Overview

REST APIs for managing Schema entities

### Available Operations

* [deleteSchema](#deleteschema) - Delete a particular schema revision for an Api.
* [downloadSchema](#downloadschema) - Download the latest schema for a particular apiID.
* [downloadSchemaRevision](#downloadschemarevision) - Download a particular schema revision for an Api.
* [getSchema](#getschema) - Get information about the latest schema.
* [getSchemaDiff](#getschemadiff) - Get a diff of two schema revisions for an Api.
* [getSchemaRevision](#getschemarevision) - Get information about a particular schema revision for an Api.
* [getSchemas](#getschemas) - Get information about all schemas associated with a particular apiID.
* [registerSchema](#registerschema) - Register a schema.

## deleteSchema

Delete a particular schema revision for an Api.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteSchemaRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new DeleteSchemaRequest();
    $request->apiID = 'corporis';
    $request->revisionID = 'iste';
    $request->versionID = 'iure';

    $response = $sdk->schemas->deleteSchema($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteSchemaRequest](../../models/operations/DeleteSchemaRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteSchemaResponse](../../models/operations/DeleteSchemaResponse.md)**


## downloadSchema

Download the latest schema for a particular apiID.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\DownloadSchemaRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new DownloadSchemaRequest();
    $request->apiID = 'saepe';
    $request->versionID = 'quidem';

    $response = $sdk->schemas->downloadSchema($request);

    if ($response->schema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\DownloadSchemaRequest](../../models/operations/DownloadSchemaRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\DownloadSchemaResponse](../../models/operations/DownloadSchemaResponse.md)**


## downloadSchemaRevision

Download a particular schema revision for an Api.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\DownloadSchemaRevisionRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new DownloadSchemaRevisionRequest();
    $request->apiID = 'architecto';
    $request->revisionID = 'ipsa';
    $request->versionID = 'reiciendis';

    $response = $sdk->schemas->downloadSchemaRevision($request);

    if ($response->schema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\DownloadSchemaRevisionRequest](../../models/operations/DownloadSchemaRevisionRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\DownloadSchemaRevisionResponse](../../models/operations/DownloadSchemaRevisionResponse.md)**


## getSchema

Returns information about the last uploaded schema for a particular API version. 
This won't include the schema itself, that can be retrieved via the downloadSchema operation.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetSchemaRequest();
    $request->apiID = 'est';
    $request->versionID = 'mollitia';

    $response = $sdk->schemas->getSchema($request);

    if ($response->schema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaRequest](../../models/operations/GetSchemaRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaResponse](../../models/operations/GetSchemaResponse.md)**


## getSchemaDiff

Get a diff of two schema revisions for an Api.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaDiffRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetSchemaDiffRequest();
    $request->apiID = 'laborum';
    $request->baseRevisionID = 'dolores';
    $request->targetRevisionID = 'dolorem';
    $request->versionID = 'corporis';

    $response = $sdk->schemas->getSchemaDiff($request);

    if ($response->schemaDiff !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaDiffRequest](../../models/operations/GetSchemaDiffRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaDiffResponse](../../models/operations/GetSchemaDiffResponse.md)**


## getSchemaRevision

Returns information about the last uploaded schema for a particular schema revision. 
This won't include the schema itself, that can be retrieved via the downloadSchema operation.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaRevisionRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetSchemaRevisionRequest();
    $request->apiID = 'explicabo';
    $request->revisionID = 'nobis';
    $request->versionID = 'enim';

    $response = $sdk->schemas->getSchemaRevision($request);

    if ($response->schema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaRevisionRequest](../../models/operations/GetSchemaRevisionRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaRevisionResponse](../../models/operations/GetSchemaRevisionResponse.md)**


## getSchemas

Returns information the schemas associated with a particular apiID. 
This won't include the schemas themselves, they can be retrieved via the downloadSchema operation.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemasRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetSchemasRequest();
    $request->apiID = 'omnis';
    $request->versionID = 'nemo';

    $response = $sdk->schemas->getSchemas($request);

    if ($response->schemata !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemasRequest](../../models/operations/GetSchemasRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemasResponse](../../models/operations/GetSchemasResponse.md)**


## registerSchema

Allows uploading a schema for a particular API version.
This will be used to populate ApiEndpoints and used as a base for any schema generation if present.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\RegisterSchemaRequest;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\RegisterSchemaRequestBody;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\RegisterSchemaRequestBodyFile;

$sdk = SDK::builder()
    ->build();

try {
    $request = new RegisterSchemaRequest();
    $request->requestBody = new RegisterSchemaRequestBody();
    $request->requestBody->file = new RegisterSchemaRequestBodyFile();
    $request->requestBody->file->content = 'minima';
    $request->requestBody->file->file = 'excepturi';
    $request->apiID = 'accusantium';
    $request->versionID = 'iure';

    $response = $sdk->schemas->registerSchema($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\RegisterSchemaRequest](../../models/operations/RegisterSchemaRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\RegisterSchemaResponse](../../models/operations/RegisterSchemaResponse.md)**

