# Metadata


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

use \Speakeasy\SpeakeasyClientSDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setWorkspaceID('string')
    ->setSecurity($security)->build();

try {
        $request = new Operations\DeleteVersionMetadataRequest();
    $request->apiID = 'string';
    $request->metaKey = 'string';
    $request->metaValue = 'string';
    $request->versionID = 'string';;

    $response = $sdk->metadata->deleteVersionMetadata($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteVersionMetadataRequest](../../Models/Operations/DeleteVersionMetadataRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteVersionMetadataResponse](../../Models/Operations/DeleteVersionMetadataResponse.md)**


## getVersionMetadata

Get all metadata for a particular apiID and versionID.

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
        $request = new Operations\GetVersionMetadataRequest();
    $request->apiID = 'string';
    $request->versionID = 'string';;

    $response = $sdk->metadata->getVersionMetadata($request);

    if ($response->versionMetadata !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetVersionMetadataRequest](../../Models/Operations/GetVersionMetadataRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetVersionMetadataResponse](../../Models/Operations/GetVersionMetadataResponse.md)**


## insertVersionMetadata

Insert metadata for a particular apiID and versionID.

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
        $request = new Operations\InsertVersionMetadataRequest();
    $request->versionMetadata = new Shared\VersionMetadataInput();
    $request->versionMetadata->metaKey = 'string';
    $request->versionMetadata->metaValue = 'string';
    $request->apiID = 'string';
    $request->versionID = 'string';;

    $response = $sdk->metadata->insertVersionMetadata($request);

    if ($response->versionMetadata !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\InsertVersionMetadataRequest](../../Models/Operations/InsertVersionMetadataRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\InsertVersionMetadataResponse](../../Models/Operations/InsertVersionMetadataResponse.md)**

