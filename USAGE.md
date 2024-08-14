<!-- Start SDK Example Usage [usage] -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetApisRequest(
        metadata: [
            'South' => [
                '<value>',
            ],
        ],
        op: new Operations\QueryParamOp(
            and: false,
        ),
    );
    $response = $sdk->apis->getApis($request);

    if ($response->apis !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```
<!-- End SDK Example Usage [usage] -->