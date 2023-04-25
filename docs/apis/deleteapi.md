# deleteApi
Available in: `apis`

Delete a particular version of an Api. The will also delete all associated ApiEndpoints, Metadata, Schemas & Request Logs (if using a Postgres datastore).

## Example Usage
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteApiRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new DeleteApiRequest();
    $request->apiID = 'quod';
    $request->versionID = 'esse';

    $response = $sdk->apis->deleteApi($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```