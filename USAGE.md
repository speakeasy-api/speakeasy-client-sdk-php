<!-- Start SDK Example Usage [usage] -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;
use Speakeasy\SpeakeasyClientSDK\Utils;

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            apiKey: '<YOUR_API_KEY_HERE>',
        )
    )
    ->build();

$request = new Shared\PublishingToken(
    createdAt: Utils\Utils::parseDateTime('2025-10-25T02:17:15.413Z'),
    id: '<id>',
    targetId: '<id>',
    targetResource: '<value>',
    token: '<value>',
);

$response = $sdk->createPublishingToken(
    request: $request
);

if ($response->publishingToken !== null) {
    // handle response
}
```
<!-- End SDK Example Usage [usage] -->