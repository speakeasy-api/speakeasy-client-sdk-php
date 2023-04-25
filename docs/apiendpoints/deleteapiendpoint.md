# deleteApiEndpoint
Available in: `apiEndpoints`

Delete an ApiEndpoint. This will also delete all associated Request Logs (if using a Postgres datastore).

## Example Usage
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteApiEndpointRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new DeleteApiEndpointRequest();
    $request->apiEndpointID = 'delectus';
    $request->apiID = 'tempora';
    $request->versionID = 'suscipit';

    $response = $sdk->apiEndpoints->deleteApiEndpoint($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```