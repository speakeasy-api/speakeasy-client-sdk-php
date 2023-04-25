# downloadSchema
Available in: `schemas`

Download the latest schema for a particular apiID.

## Example Usage
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
    $request->apiID = 'ipsam';
    $request->versionID = 'id';

    $response = $sdk->schemas->downloadSchema($request);

    if ($response->schema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```