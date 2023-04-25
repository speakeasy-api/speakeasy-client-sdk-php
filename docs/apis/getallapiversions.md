# getAllApiVersions
Available in: `apis`

Get all Api versions for a particular ApiEndpoint.
Supports filtering the versions based on metadata attributes.

## Example Usage
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllApiVersionsRequest;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllApiVersionsOp;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetAllApiVersionsRequest();
    $request->apiID = 'nam';
    $request->metadata = [
        'occaecati' => [
            'deleniti',
        ],
        'hic' => [
            'totam',
            'beatae',
            'commodi',
            'molestiae',
        ],
        'modi' => [
            'impedit',
        ],
    ];
    $request->op = new GetAllApiVersionsOp();
    $request->op->and = false;

    $response = $sdk->apis->getAllApiVersions($request);

    if ($response->apis !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```