# queryEventLog
Available in: `requests`

Supports retrieving a list of request captured by the SDK for this workspace.
Allows the filtering of requests on a number of criteria such as ApiID, VersionID, Path, Method, etc.

## Example Usage
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\QueryEventLogRequest;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Filters;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Filter;

$sdk = SDK::builder()
    ->build();

try {
    $request = new QueryEventLogRequest();
    $request->filters = new Filters();
    $request->filters->filters = [
        new Filter(),
        new Filter(),
        new Filter(),
    ];
    $request->filters->limit = 656330;
    $request->filters->offset = 317202;
    $request->filters->operator = 'odit';

    $response = $sdk->requests->queryEventLog($request);

    if ($response->boundedRequests !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```