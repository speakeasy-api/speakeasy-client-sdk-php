# insertVersionMetadata
Available in: `metadata`

Insert metadata for a particular apiID and versionID.

## Example Usage
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