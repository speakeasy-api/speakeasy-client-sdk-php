# deleteSchema
Available in: `schemas`

Delete a particular schema revision for an Api.

## Example Usage
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
    $request->apiID = 'quo';
    $request->revisionID = 'sequi';
    $request->versionID = 'tenetur';

    $response = $sdk->schemas->deleteSchema($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```