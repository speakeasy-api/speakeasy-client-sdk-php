# generateOpenApiSpec
Available in: `apis`

This endpoint will generate any missing operations in any registered OpenAPI document if the operation does not already exist in the document.
Returns the original document and the newly generated document allowing a diff to be performed to see what has changed.

## Example Usage
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\GenerateOpenApiSpecRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GenerateOpenApiSpecRequest();
    $request->apiID = 'totam';
    $request->versionID = 'porro';

    $response = $sdk->apis->generateOpenApiSpec($request);

    if ($response->generateOpenApiSpecDiff !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```