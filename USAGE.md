<!-- Start SDK Example Usage [usage] -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security(
    apiKey: '<YOUR_API_KEY_HERE>',
);

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

$request = new Shared\CodeSampleSchemaInput(
    languages: [
        '<value>',
    ],
    schemaFile: new Shared\SchemaFile(
        content: '0xc3dD8BfBef',
        fileName: 'example.file',
    ),
);

$response = $sdk->generateCodeSamplePreview(
    request: $request
);

if ($response->twoHundredApplicationJsonBytes !== null) {
    // handle response
}
```
<!-- End SDK Example Usage [usage] -->