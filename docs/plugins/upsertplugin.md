# upsertPlugin
Available in: `plugins`

Upsert a plugin

## Example Usage
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Plugin;

$sdk = SDK::builder()
    ->build();

try {
    $request = new Plugin();
    $request->code = 'mollitia';
    $request->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-06-30T02:19:51.375Z');
    $request->evalHash = 'commodi';
    $request->pluginId = 'quam';
    $request->title = 'Ms.';
    $request->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-18T10:03:04.921Z');
    $request->workspaceId = 'quia';

    $response = $sdk->plugins->upsertPlugin($request);

    if ($response->plugin !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```