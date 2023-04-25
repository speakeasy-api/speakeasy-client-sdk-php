# upsertApi
Available in: `apis`

Upsert an Api. If the Api does not exist, it will be created.
If the Api exists, it will be updated.

## Example Usage
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\UpsertApiRequest;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\ApiInput;

$sdk = SDK::builder()
    ->build();

try {
    $request = new UpsertApiRequest();
    $request->apiInput = new ApiInput();
    $request->apiInput->apiId = 'dolor';
    $request->apiInput->description = 'natus';
    $request->apiInput->metaData = [
        'hic' => [
            'fuga',
            'in',
            'corporis',
            'iste',
        ],
        'iure' => [
            'quidem',
            'architecto',
            'ipsa',
            'reiciendis',
        ],
    ];
    $request->apiInput->versionId = 'est';
    $request->apiID = 'mollitia';

    $response = $sdk->apis->upsertApi($request);

    if ($response->api !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```