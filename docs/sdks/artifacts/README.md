# Artifacts


### Available Operations

* [getBlob](#getblob) - Get blob for a particular digest
* [getManifest](#getmanifest) - Get manifest for a particular reference
* [getNamespaces](#getnamespaces) - Each namespace contains many revisions.
* [getRevisions](#getrevisions)
* [getTags](#gettags)
* [preflight](#preflight) - Get access token for communicating with OCI distribution endpoints

## getBlob

Get blob for a particular digest

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
        $request = new Operations\GetBlobRequest();
    $request->digest = '<value>';
    $request->namespaceName = '<value>';
    $request->organizationSlug = '<value>';
    $request->workspaceSlug = '<value>';;

    $response = $sdk->artifacts->getBlob($request);

    if ($response->blob !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetBlobRequest](../../Models/Operations/GetBlobRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetBlobResponse](../../Models/Operations/GetBlobResponse.md)**


## getManifest

Get manifest for a particular reference

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
        $request = new Operations\GetManifestRequest();
    $request->namespaceName = '<value>';
    $request->organizationSlug = '<value>';
    $request->revisionReference = '<value>';
    $request->workspaceSlug = '<value>';;

    $response = $sdk->artifacts->getManifest($request);

    if ($response->manifest !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetManifestRequest](../../Models/Operations/GetManifestRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetManifestResponse](../../Models/Operations/GetManifestResponse.md)**


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
    $request->namespaceName = '<value>';
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


## getTags

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
        $request = new Operations\GetTagsRequest();
    $request->namespaceName = '<value>';;

    $response = $sdk->artifacts->getTags($request);

    if ($response->getTagsResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetTagsRequest](../../Models/Operations/GetTagsRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetTagsResponse](../../Models/Operations/GetTagsResponse.md)**


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
        $request = new Shared\PreflightRequest();
    $request->namespaceName = '<value>';;

    $response = $sdk->artifacts->preflight($request);

    if ($response->preflightToken !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\Speakeasy\SpeakeasyClientSDK\Models\Shared\PreflightRequest](../../Models/Shared/PreflightRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\PreflightResponse](../../Models/Operations/PreflightResponse.md)**

