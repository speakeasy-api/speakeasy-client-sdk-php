# registerSchema
Available in: `schemas`

Allows uploading a schema for a particular API version.
This will be used to populate ApiEndpoints and used as a base for any schema generation if present.

## Example Usage
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\RegisterSchemaRequest;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\RegisterSchemaRequestBody;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\RegisterSchemaRequestBodyFile;

$sdk = SDK::builder()
    ->build();

try {
    $request = new RegisterSchemaRequest();
    $request->requestBody = new RegisterSchemaRequestBody();
    $request->requestBody->file = new RegisterSchemaRequestBodyFile();
    $request->requestBody->file->content = 'omnis';
    $request->requestBody->file->file = 'voluptate';
    $request->apiID = 'cum';
    $request->versionID = 'perferendis';

    $response = $sdk->schemas->registerSchema($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```