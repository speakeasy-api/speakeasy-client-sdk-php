# deleteVersionMetadata
Available in: `metadata`

Delete metadata for a particular apiID and versionID.

## Example Usage
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