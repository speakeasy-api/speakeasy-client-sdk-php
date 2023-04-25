# runPlugin
Available in: `plugins`

Run a plugin

## Example Usage
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\RunPluginRequest;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Filters;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Filter;

$sdk = SDK::builder()
    ->build();

try {
    $request = new RunPluginRequest();
    $request->filters = new Filters();
    $request->filters->filters = [
        new Filter(),
        new Filter(),
        new Filter(),
    ];
    $request->filters->limit = 208876;
    $request->filters->offset = 635059;
    $request->filters->operator = 'consequuntur';
    $request->pluginID = 'repellat';

    $response = $sdk->plugins->runPlugin($request);

    if ($response->boundedRequests !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```