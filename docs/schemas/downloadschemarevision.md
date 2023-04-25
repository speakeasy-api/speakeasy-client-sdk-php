# downloadSchemaRevision
Available in: `schemas`

Download a particular schema revision for an Api.

## Example Usage
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
    $request->apiID = 'possimus';
    $request->revisionID = 'aut';
    $request->versionID = 'quasi';

    $response = $sdk->schemas->downloadSchemaRevision($request);

    if ($response->schema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```