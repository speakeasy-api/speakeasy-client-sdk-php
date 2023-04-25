# getRequestFromEventLog
Available in: `requests`

Get information about a particular request.

## Example Usage
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetRequestFromEventLogRequest;

$sdk = SDK::builder()
    ->build();

try {
    $request = new GetRequestFromEventLogRequest();
    $request->requestID = 'vitae';

    $response = $sdk->requests->getRequestFromEventLog($request);

    if ($response->unboundedRequest !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```