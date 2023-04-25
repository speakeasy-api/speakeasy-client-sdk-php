# metadata

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

$sdk = SDK::builder()
    ->build();

try {
    $request = new DeleteVersionMetadataRequest();
    $request->apiID = 'omnis';
    $request->metaKey = 'nemo';
    $request->metaValue = 'minima';
    $request->versionID = 'excepturi';

    $response = $sdk->metadata->deleteVersionMetadata($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetVersionMetadataRequest();
    $request->apiID = 'accusantium';
    $request->versionID = 'iure';

    $response = $sdk->metadata->getVersionMetadata($request);

    if ($response->versionMetadata !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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

$sdk = SDK::builder()
    ->build();

try {
    $request = new InsertVersionMetadataRequest();
    $request->versionMetadataInput = new VersionMetadataInput();
    $request->versionMetadataInput->metaKey = 'culpa';
    $request->versionMetadataInput->metaValue = 'doloribus';
    $request->apiID = 'sapiente';
    $request->versionID = 'architecto';

    $response = $sdk->metadata->insertVersionMetadata($request);

    if ($response->versionMetadata !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
