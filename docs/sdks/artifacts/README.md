# Artifacts
(*artifacts*)

## Overview

REST APIs for working with Registry artifacts

### Available Operations

* [createRemoteSource](#createremotesource) - Configure a new remote source
* [getBlob](#getblob) - Get blob for a particular digest
* [getManifest](#getmanifest) - Get manifest for a particular reference
* [getNamespaces](#getnamespaces) - Each namespace contains many revisions.
* [getRevisions](#getrevisions)
* [getTags](#gettags)
* [listRemoteSources](#listremotesources) - Get remote sources attached to a particular namespace
* [postTags](#posttags) - Add tags to an existing revision
* [preflight](#preflight) - Get access token for communicating with OCI distribution endpoints
* [setArchived](#setarchived) - Set whether a namespace is archived
* [setVisibility](#setvisibility) - Set visibility of a namespace with an existing metadata entry

## createRemoteSource

Configure a new remote source

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            apiKey: '<YOUR_API_KEY_HERE>',
        )
    )
    ->build();

$request = new Shared\RemoteSource(
    inputs: [
        new Shared\RemoteDocument(
            registryUrl: 'https://productive-swine.net',
        ),
    ],
    output: new Shared\RemoteDocument(
        registryUrl: 'https://spiteful-apricot.info',
    ),
);

$response = $sdk->artifacts->createRemoteSource(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                  | Type                                                       | Required                                                   | Description                                                |
| ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- |
| `$request`                                                 | [Shared\RemoteSource](../../Models/Shared/RemoteSource.md) | :heavy_check_mark:                                         | The request object to use for the request.                 |

### Response

**[?Operations\CreateRemoteSourceResponse](../../Models/Operations/CreateRemoteSourceResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errorors\Error         | 4XX                    | application/json       |
| Errorors\SDKExceptioon | 5XX                    | \*/\*                  |

## getBlob

Get blob for a particular digest

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            apiKey: '<YOUR_API_KEY_HERE>',
        )
    )
    ->build();

$request = new Operations\GetBlobRequest(
    digest: '<value>',
    namespaceName: '<value>',
    organizationSlug: '<value>',
    workspaceSlug: '<value>',
);

$response = $sdk->artifacts->getBlob(
    request: $request
);

if ($response->blob !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                              | Type                                                                   | Required                                                               | Description                                                            |
| ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- |
| `$request`                                                             | [Operations\GetBlobRequest](../../Models/Operations/GetBlobRequest.md) | :heavy_check_mark:                                                     | The request object to use for the request.                             |

### Response

**[?Operations\GetBlobResponse](../../Models/Operations/GetBlobResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errorors\Error         | 4XX                    | application/json       |
| Errorors\SDKExceptioon | 5XX                    | \*/\*                  |

## getManifest

Get manifest for a particular reference

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            apiKey: '<YOUR_API_KEY_HERE>',
        )
    )
    ->build();

$request = new Operations\GetManifestRequest(
    namespaceName: '<value>',
    organizationSlug: '<value>',
    revisionReference: '<value>',
    workspaceSlug: '<value>',
);

$response = $sdk->artifacts->getManifest(
    request: $request
);

if ($response->manifest !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\GetManifestRequest](../../Models/Operations/GetManifestRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\GetManifestResponse](../../Models/Operations/GetManifestResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errorors\Error         | 4XX                    | application/json       |
| Errorors\SDKExceptioon | 5XX                    | \*/\*                  |

## getNamespaces

Each namespace contains many revisions.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            apiKey: '<YOUR_API_KEY_HERE>',
        )
    )
    ->build();



$response = $sdk->artifacts->getNamespaces(

);

if ($response->getNamespacesResponse !== null) {
    // handle response
}
```

### Response

**[?Operations\GetNamespacesResponse](../../Models/Operations/GetNamespacesResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errorors\Error         | 4XX                    | application/json       |
| Errorors\SDKExceptioon | 5XX                    | \*/\*                  |

## getRevisions

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            apiKey: '<YOUR_API_KEY_HERE>',
        )
    )
    ->build();

$request = new Operations\GetRevisionsRequest(
    namespaceName: '<value>',
);

$response = $sdk->artifacts->getRevisions(
    request: $request
);

if ($response->getRevisionsResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetRevisionsRequest](../../Models/Operations/GetRevisionsRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\GetRevisionsResponse](../../Models/Operations/GetRevisionsResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errorors\Error         | 4XX                    | application/json       |
| Errorors\SDKExceptioon | 5XX                    | \*/\*                  |

## getTags

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            apiKey: '<YOUR_API_KEY_HERE>',
        )
    )
    ->build();

$request = new Operations\GetTagsRequest(
    namespaceName: '<value>',
);

$response = $sdk->artifacts->getTags(
    request: $request
);

if ($response->getTagsResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                              | Type                                                                   | Required                                                               | Description                                                            |
| ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- |
| `$request`                                                             | [Operations\GetTagsRequest](../../Models/Operations/GetTagsRequest.md) | :heavy_check_mark:                                                     | The request object to use for the request.                             |

### Response

**[?Operations\GetTagsResponse](../../Models/Operations/GetTagsResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errorors\Error         | 4XX                    | application/json       |
| Errorors\SDKExceptioon | 5XX                    | \*/\*                  |

## listRemoteSources

Get remote sources attached to a particular namespace

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            apiKey: '<YOUR_API_KEY_HERE>',
        )
    )
    ->build();

$request = new Operations\ListRemoteSourcesRequest(
    namespaceName: '<value>',
);

$response = $sdk->artifacts->listRemoteSources(
    request: $request
);

if ($response->remoteSource !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListRemoteSourcesRequest](../../Models/Operations/ListRemoteSourcesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListRemoteSourcesResponse](../../Models/Operations/ListRemoteSourcesResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errorors\Error         | 4XX                    | application/json       |
| Errorors\SDKExceptioon | 5XX                    | \*/\*                  |

## postTags

Add tags to an existing revision

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            apiKey: '<YOUR_API_KEY_HERE>',
        )
    )
    ->build();

$request = new Operations\PostTagsRequest(
    namespaceName: '<value>',
);

$response = $sdk->artifacts->postTags(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `$request`                                                               | [Operations\PostTagsRequest](../../Models/Operations/PostTagsRequest.md) | :heavy_check_mark:                                                       | The request object to use for the request.                               |

### Response

**[?Operations\PostTagsResponse](../../Models/Operations/PostTagsResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errorors\Error         | 4XX                    | application/json       |
| Errorors\SDKExceptioon | 5XX                    | \*/\*                  |

## preflight

Get access token for communicating with OCI distribution endpoints

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            apiKey: '<YOUR_API_KEY_HERE>',
        )
    )
    ->build();

$request = new Shared\PreflightRequest(
    namespaceName: '<value>',
);

$response = $sdk->artifacts->preflight(
    request: $request
);

if ($response->preflightToken !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                          | Type                                                               | Required                                                           | Description                                                        |
| ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ |
| `$request`                                                         | [Shared\PreflightRequest](../../Models/Shared/PreflightRequest.md) | :heavy_check_mark:                                                 | The request object to use for the request.                         |

### Response

**[?Operations\PreflightResponse](../../Models/Operations/PreflightResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errorors\Error         | 4XX                    | application/json       |
| Errorors\SDKExceptioon | 5XX                    | \*/\*                  |

## setArchived

Set whether a namespace is archived

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            apiKey: '<YOUR_API_KEY_HERE>',
        )
    )
    ->build();

$request = new Operations\ArchiveNamespaceRequest(
    namespaceName: '<value>',
);

$response = $sdk->artifacts->setArchived(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ArchiveNamespaceRequest](../../Models/Operations/ArchiveNamespaceRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ArchiveNamespaceResponse](../../Models/Operations/ArchiveNamespaceResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errorors\Error         | 4XX                    | application/json       |
| Errorors\SDKExceptioon | 5XX                    | \*/\*                  |

## setVisibility

Set visibility of a namespace with an existing metadata entry

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            apiKey: '<YOUR_API_KEY_HERE>',
        )
    )
    ->build();

$request = new Operations\SetVisibilityRequest(
    namespaceName: '<value>',
);

$response = $sdk->artifacts->setVisibility(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\SetVisibilityRequest](../../Models/Operations/SetVisibilityRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\SetVisibilityResponse](../../Models/Operations/SetVisibilityResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errorors\Error         | 4XX                    | application/json       |
| Errorors\SDKExceptioon | 5XX                    | \*/\*                  |