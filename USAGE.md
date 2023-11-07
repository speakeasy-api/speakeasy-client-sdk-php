<!-- Start SDK Example Usage -->


```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\GetApisRequest();
    $request->metadata = [
        'South' => ['string'],
    ];
    $request->op = new Operations\QueryParamOp();
    $request->op->and = false;

    $response = $sdk->apis->getApis($request);

    if ($response->classes !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage -->