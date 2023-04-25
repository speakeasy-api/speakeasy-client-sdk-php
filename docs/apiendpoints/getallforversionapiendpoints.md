# getAllForVersionApiEndpoints
Available in: `apiEndpoints`

Get all ApiEndpoints for a particular apiID and versionID.

## Example Usage
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllForVersionApiEndpointsRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetAllForVersionApiEndpointsRequest();
    $request->apiID = 'quis';
    $request->versionID = 'veritatis';

    $response = $sdk->apiEndpoints->getAllForVersionApiEndpoints($request);

    if ($response->apiEndpoints !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```