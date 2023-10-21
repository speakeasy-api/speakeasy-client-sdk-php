<!-- Start SDK Example Usage -->


```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK\SDK;
use Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use Speakeasy\SpeakeasyClientSDK\Models\Operations\GetApisRequest;
use Speakeasy\SpeakeasyClientSDK\Models\Operations\GetApisOp;

$security = new Security();
$security->apiKey = '';

$sdk = SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetApisRequest();
    $request->metadata = [
        'South' => ['string'],
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
<!-- End SDK Example Usage -->