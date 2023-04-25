# upsertApiEndpoint
Available in: `apiEndpoints`

Upsert an ApiEndpoint. If the ApiEndpoint does not exist it will be created, otherwise it will be updated.

## Example Usage
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\UpsertApiEndpointRequest;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\ApiEndpointInput;

$sdk = SDK::builder()
    ->build();

try {
    $request = new UpsertApiEndpointRequest();
    $request->apiEndpointInput = new ApiEndpointInput();
    $request->apiEndpointInput->apiEndpointId = 'repellendus';
    $request->apiEndpointInput->description = 'sapiente';
    $request->apiEndpointInput->displayName = 'quo';
    $request->apiEndpointInput->method = 'odit';
    $request->apiEndpointInput->path = 'at';
    $request->apiEndpointInput->versionId = 'at';
    $request->apiEndpointID = 'maiores';
    $request->apiID = 'molestiae';
    $request->versionID = 'quod';

    $response = $sdk->apiEndpoints->upsertApiEndpoint($request);

    if ($response->apiEndpoint !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```