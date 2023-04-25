# getValidEmbedAccessTokens
Available in: `embeds`

Get all valid embed access tokens for the current workspace.

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
    $response = $sdk->embeds->getValidEmbedAccessTokens();

    if ($response->embedTokens !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```