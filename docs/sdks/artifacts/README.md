# Artifacts


### Available Operations

* [getNamespaces](#getnamespaces) - Each namespace contains many revisions.
* [getRevisions](#getrevisions)
* [preflight](#preflight) - Get access token for communicating with OCI distribution endpoints

## getNamespaces

Each namespace contains many revisions.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setWorkspaceID('<value>')
    ->setSecurity($security)->build();

try {
    $response = $sdk->artifacts->getNamespaces();

    if ($response->getNamespacesResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetNamespacesResponse](../../Models/Operations/GetNamespacesResponse.md)**


## getRevisions

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

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setWorkspaceID('<value>')
    ->setSecurity($security)->build();

try {
        $request = new Operations\GetRevisionsRequest();
    $request->namespaceId = '<value>';
    $request->nextPageToken = '<value>';;

    $response = $sdk->artifacts->getRevisions($request);

    if ($response->getRevisionsResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetRevisionsRequest](../../Models/Operations/GetRevisionsRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetRevisionsResponse](../../Models/Operations/GetRevisionsResponse.md)**


## preflight

Get access token for communicating with OCI distribution endpoints

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setWorkspaceID('<value>')
    ->setSecurity($security)->build();

try {
    $response = $sdk->artifacts->preflight();

    if ($response->preflightToken !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\PreflightResponse](../../Models/Operations/PreflightResponse.md)**

