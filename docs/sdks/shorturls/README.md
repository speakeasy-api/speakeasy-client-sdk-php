# ShortURLs


## Overview

REST APIs for managing short URLs

### Available Operations

* [create](#create) - Shorten a URL.

## create

Shorten a URL.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateRequestBody();
    $request->url = 'http://limp-pastry.org';;

    $response = $sdk->shortURLs->create($request);

    if ($response->shortURL !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\CreateRequestBody](../../Models/Operations/CreateRequestBody.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\CreateResponse](../../Models/Operations/CreateResponse.md)**

