<!-- Start SDK Example Usage [usage] -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            apiKey: '<YOUR_API_KEY_HERE>',
        )
    )
    ->build();

$request = new Operations\ArchiveNamespaceRequest(
    namespaceName: '<value>',
);

$response = $sdk->artifacts->setArchived(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```
<!-- End SDK Example Usage [usage] -->