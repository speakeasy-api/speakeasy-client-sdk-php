# getPlugins
Available in: `plugins`

Get all plugins for the current workspace.

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
    $response = $sdk->plugins->getPlugins();

    if ($response->plugins !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```