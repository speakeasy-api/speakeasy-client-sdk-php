# generatePostmanCollection
Available in: `apis`

Generates a postman collection containing all endpoints for a particular API. Includes variables produced for any path/query/header parameters included in the OpenAPI document.

## Example Usage
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\GeneratePostmanCollectionRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GeneratePostmanCollectionRequest();
    $request->apiID = 'dolorum';
    $request->versionID = 'dicta';

    $response = $sdk->apis->generatePostmanCollection($request);

    if ($response->postmanCollection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```