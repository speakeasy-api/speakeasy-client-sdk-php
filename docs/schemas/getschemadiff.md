# getSchemaDiff
Available in: `schemas`

Get a diff of two schema revisions for an Api.

## Example Usage
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaDiffRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetSchemaDiffRequest();
    $request->apiID = 'laborum';
    $request->baseRevisionID = 'quasi';
    $request->targetRevisionID = 'reiciendis';
    $request->versionID = 'voluptatibus';

    $response = $sdk->schemas->getSchemaDiff($request);

    if ($response->schemaDiff !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```