# generatePostmanCollectionForApiEndpoint
Available in: `apiEndpoints`

Generates a postman collection that allows the endpoint to be called from postman variables produced for any path/query/header parameters included in the OpenAPI document.

## Example Usage
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\GeneratePostmanCollectionForApiEndpointRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GeneratePostmanCollectionForApiEndpointRequest();
    $request->apiEndpointID = 'nisi';
    $request->apiID = 'recusandae';
    $request->versionID = 'temporibus';

    $response = $sdk->apiEndpoints->generatePostmanCollectionForApiEndpoint($request);

    if ($response->postmanCollection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```