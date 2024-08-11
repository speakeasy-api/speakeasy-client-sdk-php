# Artifacts


## Overview

REST APIs for working with Registry artifacts

### Available Operations

* [getBlob](#getblob) - Get blob for a particular digest
* [getManifest](#getmanifest) - Get manifest for a particular reference
* [getNamespaces](#getnamespaces) - Each namespace contains many revisions.
* [getOASSummary](#getoassummary)
* [getRevisions](#getrevisions)
* [getTags](#gettags)
* [postTags](#posttags) - Add tags to an existing revision
* [preflight](#preflight) - Get access token for communicating with OCI distribution endpoints

## getBlob

Get blob for a particular digest

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetBlobRequest(
        digest: '<value>',
        namespaceName: '<value>',
        organizationSlug: '<value>',
        workspaceSlug: '<value>',
    );
    $response = $sdk->artifacts->getBlob($request);

    if ($response->blob !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                              | Type                                                                   | Required                                                               | Description                                                            |
| ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- |
| `$request`                                                             | [Operations\GetBlobRequest](../../Models/Operations/GetBlobRequest.md) | :heavy_check_mark:                                                     | The request object to use for the request.                             |


### Response

**[?Operations\GetBlobResponse](../../Models/Operations/GetBlobResponse.md)**
### Errors

| Error Object                                            | Status Code                                             | Content Type                                            |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| Speakeasy\SpeakeasyClientSDK\Models\Errors.SDKException | 4xx-5xx                                                 | */*                                                     |

## getManifest

Get manifest for a particular reference

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetManifestRequest(
        namespaceName: '<value>',
        organizationSlug: '<value>',
        revisionReference: '<value>',
        workspaceSlug: '<value>',
    );
    $response = $sdk->artifacts->getManifest($request);

    if ($response->manifest !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\GetManifestRequest](../../Models/Operations/GetManifestRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |


### Response

**[?Operations\GetManifestResponse](../../Models/Operations/GetManifestResponse.md)**
### Errors

| Error Object                                            | Status Code                                             | Content Type                                            |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| Speakeasy\SpeakeasyClientSDK\Models\Errors.SDKException | 4xx-5xx                                                 | */*                                                     |

## getNamespaces

Each namespace contains many revisions.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

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

**[?Operations\GetNamespacesResponse](../../Models/Operations/GetNamespacesResponse.md)**
### Errors

| Error Object                                            | Status Code                                             | Content Type                                            |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| Speakeasy\SpeakeasyClientSDK\Models\Errors.SDKException | 4xx-5xx                                                 | */*                                                     |

## getOASSummary

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetOASSummaryRequest(
        namespaceName: '<value>',
        revisionReference: '<value>',
    );
    $response = $sdk->artifacts->getOASSummary($request);

    if ($response->oasSummary !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetOASSummaryRequest](../../Models/Operations/GetOASSummaryRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |


### Response

**[?Operations\GetOASSummaryResponse](../../Models/Operations/GetOASSummaryResponse.md)**
### Errors

| Error Object                                            | Status Code                                             | Content Type                                            |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| Speakeasy\SpeakeasyClientSDK\Models\Errors.SDKException | 4xx-5xx                                                 | */*                                                     |

## getRevisions

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetRevisionsRequest(
        namespaceName: '<value>',
        nextPageToken: '<value>',
    );
    $response = $sdk->artifacts->getRevisions($request);

    if ($response->getRevisionsResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetRevisionsRequest](../../Models/Operations/GetRevisionsRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |


### Response

**[?Operations\GetRevisionsResponse](../../Models/Operations/GetRevisionsResponse.md)**
### Errors

| Error Object                                            | Status Code                                             | Content Type                                            |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| Speakeasy\SpeakeasyClientSDK\Models\Errors.SDKException | 4xx-5xx                                                 | */*                                                     |

## getTags

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetTagsRequest(
        namespaceName: '<value>',
    );
    $response = $sdk->artifacts->getTags($request);

    if ($response->getTagsResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                              | Type                                                                   | Required                                                               | Description                                                            |
| ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- |
| `$request`                                                             | [Operations\GetTagsRequest](../../Models/Operations/GetTagsRequest.md) | :heavy_check_mark:                                                     | The request object to use for the request.                             |


### Response

**[?Operations\GetTagsResponse](../../Models/Operations/GetTagsResponse.md)**
### Errors

| Error Object                                            | Status Code                                             | Content Type                                            |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| Speakeasy\SpeakeasyClientSDK\Models\Errors.SDKException | 4xx-5xx                                                 | */*                                                     |

## postTags

Add tags to an existing revision

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Operations\PostTagsRequest(
        namespaceName: '<value>',
        addTags: new Shared\AddTags(
            revisionDigest: '<value>',
            tags: [
                '<value>',
            ],
        ),
    );
    $response = $sdk->artifacts->postTags($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `$request`                                                               | [Operations\PostTagsRequest](../../Models/Operations/PostTagsRequest.md) | :heavy_check_mark:                                                       | The request object to use for the request.                               |


### Response

**[?Operations\PostTagsResponse](../../Models/Operations/PostTagsResponse.md)**
### Errors

| Error Object                                            | Status Code                                             | Content Type                                            |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| Speakeasy\SpeakeasyClientSDK\Models\Errors.SDKException | 4xx-5xx                                                 | */*                                                     |

## preflight

Get access token for communicating with OCI distribution endpoints

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

try {
    $request = new Shared\PreflightRequest(
        namespaceName: '<value>',
    );
    $response = $sdk->artifacts->preflight($request);

    if ($response->preflightToken !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                          | Type                                                               | Required                                                           | Description                                                        |
| ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ |
| `$request`                                                         | [Shared\PreflightRequest](../../Models/Shared/PreflightRequest.md) | :heavy_check_mark:                                                 | The request object to use for the request.                         |


### Response

**[?Operations\PreflightResponse](../../Models/Operations/PreflightResponse.md)**
### Errors

| Error Object                                            | Status Code                                             | Content Type                                            |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| Speakeasy\SpeakeasyClientSDK\Models\Errors.SDKException | 4xx-5xx                                                 | */*                                                     |
