# getEmbedAccessToken
Available in: `embeds`

Returns an embed access token for the current workspace. This can be used to authenticate access to externally embedded content.
Filters can be applied allowing views to be filtered to things like particular customerIds.

## Example Usage
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetEmbedAccessTokenRequest;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Filters;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Filter;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetEmbedAccessTokenRequest();
    $request->description = 'laborum';
    $request->duration = 170909;
    $request->filters = new Filters();
    $request->filters->filters = [
        new Filter(),
    ];
    $request->filters->limit = 358152;
    $request->filters->offset = 128926;
    $request->filters->operator = 'nobis';

    $response = $sdk->embeds->getEmbedAccessToken($request);

    if ($response->embedAccessTokenResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```