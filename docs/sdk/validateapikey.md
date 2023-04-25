# validateApiKey
Available in: `sdk`

Validate the current api key.

## Example Usage
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;

$sdk = SDK::builder()
    ->build();

try {
    $response = $sdk->sdk->validateApiKey();

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```