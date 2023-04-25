# generateOpenApiSpecForApiEndpoint
Available in: `apiEndpoints`

This endpoint will generate a new operation in any registered OpenAPI document if the operation does not already exist in the document.
Returns the original document and the newly generated document allowing a diff to be performed to see what has changed.

## Example Usage
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\GenerateOpenApiSpecForApiEndpointRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GenerateOpenApiSpecForApiEndpointRequest();
    $request->apiEndpointID = 'voluptatum';
    $request->apiID = 'iusto';
    $request->versionID = 'excepturi';

    $response = $sdk->apiEndpoints->generateOpenApiSpecForApiEndpoint($request);

    if ($response->generateOpenApiSpecDiff !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```