# Metadata
(*metadata*)

## Overview

REST APIs for managing Version Metadata entities

### Available Operations

* [deleteVersionMetadata](#deleteversionmetadata) - Delete metadata for a particular apiID and versionID.
* [getVersionMetadata](#getversionmetadata) - Get all metadata for a particular apiID and versionID.
* [insertVersionMetadata](#insertversionmetadata) - Insert metadata for a particular apiID and versionID.

## deleteVersionMetadata

Delete metadata for a particular apiID and versionID.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteVersionMetadataRequest;

$security = new Security();
$security->apiKey = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteVersionMetadataRequest();
    $request->apiID = 'East static North';
    $request->metaKey = 'veniam';
    $request->metaValue = 'cocoa';
    $request->versionID = 'deposit';

    $response = $sdk->metadata->deleteVersionMetadata($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteVersionMetadataRequest](../../models/operations/DeleteVersionMetadataRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteVersionMetadataResponse](../../models/operations/DeleteVersionMetadataResponse.md)**


## getVersionMetadata

Get all metadata for a particular apiID and versionID.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetVersionMetadataRequest;

$security = new Security();
$security->apiKey = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetVersionMetadataRequest();
    $request->apiID = 'Games';
    $request->versionID = 'Centralized cyan';

    $response = $sdk->metadata->getVersionMetadata($request);

    if ($response->versionMetadata !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetVersionMetadataRequest](../../models/operations/GetVersionMetadataRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetVersionMetadataResponse](../../models/operations/GetVersionMetadataResponse.md)**


## insertVersionMetadata

Insert metadata for a particular apiID and versionID.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\InsertVersionMetadataRequest;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\VersionMetadataInput;

$security = new Security();
$security->apiKey = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new InsertVersionMetadataRequest();
    $request->versionMetadataInput = new VersionMetadataInput();
    $request->versionMetadataInput->metaKey = 'calculating';
    $request->versionMetadataInput->metaValue = 'Bedfordshire';
    $request->apiID = 'West Northeast';
    $request->versionID = 'candela';

    $response = $sdk->metadata->insertVersionMetadata($request);

    if ($response->versionMetadata !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\InsertVersionMetadataRequest](../../models/operations/InsertVersionMetadataRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\InsertVersionMetadataResponse](../../models/operations/InsertVersionMetadataResponse.md)**

