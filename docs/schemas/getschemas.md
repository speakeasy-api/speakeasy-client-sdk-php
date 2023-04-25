# getSchemas
Available in: `schemas`

Returns information the schemas associated with a particular apiID. 
This won't include the schemas themselves, they can be retrieved via the downloadSchema operation.

## Example Usage
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemasRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetSchemasRequest();
    $request->apiID = 'voluptatibus';
    $request->versionID = 'ipsa';

    $response = $sdk->schemas->getSchemas($request);

    if ($response->schemata !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```