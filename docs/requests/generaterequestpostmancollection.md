# generateRequestPostmanCollection
Available in: `requests`

Generates a Postman collection for a particular request. 
Allowing it to be replayed with the same inputs that were captured by the SDK.

## Example Usage
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\GenerateRequestPostmanCollectionRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GenerateRequestPostmanCollectionRequest();
    $request->requestID = 'quis';

    $response = $sdk->requests->generateRequestPostmanCollection($request);

    if ($response->postmanCollection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```