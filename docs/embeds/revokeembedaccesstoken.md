# revokeEmbedAccessToken
Available in: `embeds`

Revoke an embed access EmbedToken.

## Example Usage
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\RevokeEmbedAccessTokenRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new RevokeEmbedAccessTokenRequest();
    $request->tokenID = 'enim';

    $response = $sdk->embeds->revokeEmbedAccessToken($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```