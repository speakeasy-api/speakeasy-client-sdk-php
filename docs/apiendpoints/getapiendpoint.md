# getApiEndpoint
Available in: `apiEndpoints`

Get an ApiEndpoint.

## Example Usage
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetApiEndpointRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetApiEndpointRequest();
    $request->apiEndpointID = 'deserunt';
    $request->apiID = 'perferendis';
    $request->versionID = 'ipsam';

    $response = $sdk->apiEndpoints->getApiEndpoint($request);

    if ($response->apiEndpoint !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```