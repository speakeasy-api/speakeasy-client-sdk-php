# getSchemaRevision
Available in: `schemas`

Returns information about the last uploaded schema for a particular schema revision. 
This won't include the schema itself, that can be retrieved via the downloadSchema operation.

## Example Usage
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
    $request->apiID = 'vero';
    $request->revisionID = 'nihil';
    $request->versionID = 'praesentium';

    $response = $sdk->schemas->getSchemaRevision($request);

    if ($response->schema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```