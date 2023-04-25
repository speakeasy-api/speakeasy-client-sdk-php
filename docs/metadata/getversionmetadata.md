# getVersionMetadata
Available in: `metadata`

Get all metadata for a particular apiID and versionID.

## Example Usage
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