# getApis
Available in: `apis`

Get a list of all Apis and their versions for a given workspace.
Supports filtering the APIs based on metadata attributes.

## Example Usage
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetApisRequest;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetApisOp;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetApisRequest();
    $request->metadata = [
        'esse' => [
            'excepturi',
        ],
        'aspernatur' => [
            'ad',
        ],
        'natus' => [
            'iste',
        ],
    ];
    $request->op = new GetApisOp();
    $request->op->and = false;

    $response = $sdk->apis->getApis($request);

    if ($response->apis !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```