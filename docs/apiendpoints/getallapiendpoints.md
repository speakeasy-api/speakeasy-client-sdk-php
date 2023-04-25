# getAllApiEndpoints
Available in: `apiEndpoints`

Get all Api endpoints for a particular apiID.

## Example Usage
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllApiEndpointsRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetAllApiEndpointsRequest();
    $request->apiID = 'ab';

    $response = $sdk->apiEndpoints->getAllApiEndpoints($request);

    if ($response->apiEndpoints !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```