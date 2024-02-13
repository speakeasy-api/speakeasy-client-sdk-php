# Auth


## Overview

REST APIs for managing Authentication

### Available Operations

* [validateApiKey](#validateapikey) - Validate the current api key.

## validateApiKey

Validate the current api key.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setWorkspaceID('string')
    ->setSecurity($security)->build();

try {
    $response = $sdk->auth->validateApiKey();

    if ($response->apiKeyDetails !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\ValidateApiKeyResponse](../../Models/Operations/ValidateApiKeyResponse.md)**

