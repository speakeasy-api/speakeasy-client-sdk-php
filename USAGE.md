<!-- Start SDK Example Usage [usage] -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security(
    apiKey: '<YOUR_API_KEY_HERE>',
);

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

$request = new Operations\GetApisRequest();

$response = $sdk->apis->getApis(
    request: $request
);

if ($response->apis !== null) {
    // handle response
}
```
<!-- End SDK Example Usage [usage] -->