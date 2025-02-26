# speakeasy-api/speakeasy-client-sdk-php

<!-- Start SDK Installation [installation] -->
## SDK Installation

The SDK relies on [Composer](https://getcomposer.org/) to manage its dependencies.

To install the SDK and add it as a dependency to an existing `composer.json` file:
```bash
composer require "ian-speakeasy/speakeasy-client-sdk-php"
```
<!-- End SDK Installation [installation] -->

<!-- Start SDK Example Usage [usage] -->
## SDK Example Usage

### Example

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
<!-- End SDK Example Usage [usage] -->

<!-- Start Authentication [security] -->
## Authentication

### Per-Client Security Schemes

This SDK supports the following security schemes globally:

| Name                  | Type   | Scheme      |
| --------------------- | ------ | ----------- |
| `apiKey`              | apiKey | API key     |
| `bearer`              | http   | HTTP Bearer |
| `workspaceIdentifier` | apiKey | API key     |

You can set the security parameters through the `setSecurity` function on the `SDKBuilder` when initializing the SDK. The selected scheme will be used by default to authenticate with the API for all operations that support it. For example:
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
<!-- End Authentication [security] -->

<!-- Start Available Resources and Operations [operations] -->
## Available Resources and Operations

<details open>
<summary>Available methods</summary>

### [artifacts](docs/sdks/artifacts/README.md)

* [setArchived](docs/sdks/artifacts/README.md#setarchived) - Set whether a namespace is archived
* [createRemoteSource](docs/sdks/artifacts/README.md#createremotesource) - Configure a new remote source
* [getBlob](docs/sdks/artifacts/README.md#getblob) - Get blob for a particular digest
* [getManifest](docs/sdks/artifacts/README.md#getmanifest) - Get manifest for a particular reference
* [getNamespaces](docs/sdks/artifacts/README.md#getnamespaces) - Each namespace contains many revisions.
* [getRevisions](docs/sdks/artifacts/README.md#getrevisions)
* [getTags](docs/sdks/artifacts/README.md#gettags)
* [listRemoteSources](docs/sdks/artifacts/README.md#listremotesources) - Get remote sources attached to a particular namespace
* [postTags](docs/sdks/artifacts/README.md#posttags) - Add tags to an existing revision
* [preflight](docs/sdks/artifacts/README.md#preflight) - Get access token for communicating with OCI distribution endpoints
* [setVisibility](docs/sdks/artifacts/README.md#setvisibility) - Set visibility of a namespace with an existing metadata entry

### [auth](docs/sdks/auth/README.md)

* [getAccessToken](docs/sdks/auth/README.md#getaccesstoken) - Get or refresh an access token for the current workspace.
* [getUser](docs/sdks/auth/README.md#getuser) - Get information about the current user.
* [getAccess](docs/sdks/auth/README.md#getaccess) - Get access allowances for a particular workspace
* [validateApiKey](docs/sdks/auth/README.md#validateapikey) - Validate the current api key.

### [codeSamples](docs/sdks/codesamples/README.md)

* [generateCodeSamplePreview](docs/sdks/codesamples/README.md#generatecodesamplepreview) - Generate Code Sample previews from a file and configuration parameters.
* [generateCodeSamplePreviewAsync](docs/sdks/codesamples/README.md#generatecodesamplepreviewasync) - Initiate asynchronous Code Sample preview generation from a file and configuration parameters, receiving an async JobID response for polling.
* [getCodeSamplePreviewAsync](docs/sdks/codesamples/README.md#getcodesamplepreviewasync) - Poll for the result of an asynchronous Code Sample preview generation.
* [get](docs/sdks/codesamples/README.md#get) - Retrieve usage snippets

### [events](docs/sdks/events/README.md)

* [getEventsByTarget](docs/sdks/events/README.md#geteventsbytarget) - Load recent events for a particular workspace
* [getTargets](docs/sdks/events/README.md#gettargets) - Load targets for a particular workspace
* [getTargetsDeprecated](docs/sdks/events/README.md#gettargetsdeprecated) - Load targets for a particular workspace
* [post](docs/sdks/events/README.md#post) - Post events for a specific workspace
* [search](docs/sdks/events/README.md#search) - Search events for a particular workspace by any field

### [github](docs/sdks/github/README.md)

* [checkAccess](docs/sdks/github/README.md#checkaccess)
* [getAction](docs/sdks/github/README.md#getaction)
* [getSetup](docs/sdks/github/README.md#getsetup)
* [checkPublishingPRs](docs/sdks/github/README.md#checkpublishingprs)
* [checkPublishingSecrets](docs/sdks/github/README.md#checkpublishingsecrets)
* [configureCodeSamples](docs/sdks/github/README.md#configurecodesamples)
* [configureMintlifyRepo](docs/sdks/github/README.md#configuremintlifyrepo)
* [configureTarget](docs/sdks/github/README.md#configuretarget)
* [storePublishingSecrets](docs/sdks/github/README.md#storepublishingsecrets)
* [triggerAction](docs/sdks/github/README.md#triggeraction)
* [linkGithub](docs/sdks/github/README.md#linkgithub)

### [organizations](docs/sdks/organizations/README.md)

* [createBillingAddOns](docs/sdks/organizations/README.md#createbillingaddons) - Create billing add ons
* [createFreeTrial](docs/sdks/organizations/README.md#createfreetrial) - Create a free trial for an organization
* [create](docs/sdks/organizations/README.md#create) - Create an organization
* [deleteBillingAddOn](docs/sdks/organizations/README.md#deletebillingaddon) - Delete billing add ons
* [getBillingAddOns](docs/sdks/organizations/README.md#getbillingaddons) - Get billing add ons
* [get](docs/sdks/organizations/README.md#get) - Get organization
* [getUsage](docs/sdks/organizations/README.md#getusage) - Get billing usage summary for a particular organization
* [getAll](docs/sdks/organizations/README.md#getall) - Get organizations for a user

### [reports](docs/sdks/reports/README.md)

* [getChangesReportSignedUrl](docs/sdks/reports/README.md#getchangesreportsignedurl) - Get the signed access url for the change reports for a particular document.
* [getLintingReportSignedUrl](docs/sdks/reports/README.md#getlintingreportsignedurl) - Get the signed access url for the linting reports for a particular document.
* [uploadReport](docs/sdks/reports/README.md#uploadreport) - Upload a report.


### [shortURLs](docs/sdks/shorturls/README.md)

* [create](docs/sdks/shorturls/README.md#create) - Shorten a URL.

### [subscriptions](docs/sdks/subscriptions/README.md)

* [activateSubscriptionNamespace](docs/sdks/subscriptions/README.md#activatesubscriptionnamespace) - Activate an ignored namespace for a subscription
* [ignoreSubscriptionNamespace](docs/sdks/subscriptions/README.md#ignoresubscriptionnamespace) - Ignored a namespace for a subscription

### [suggest](docs/sdks/suggest/README.md)

* [suggest](docs/sdks/suggest/README.md#suggest) - Generate suggestions for improving an OpenAPI document.
* [suggestItems](docs/sdks/suggest/README.md#suggestitems) - Generate generic suggestions for a list of items.
* [suggestOpenAPI](docs/sdks/suggest/README.md#suggestopenapi) - (DEPRECATED) Generate suggestions for improving an OpenAPI document.
* [suggestOpenAPIRegistry](docs/sdks/suggest/README.md#suggestopenapiregistry) - Generate suggestions for improving an OpenAPI document stored in the registry.

### [workspaces](docs/sdks/workspaces/README.md)

* [create](docs/sdks/workspaces/README.md#create) - Create a workspace
* [createToken](docs/sdks/workspaces/README.md#createtoken) - Create a token for a particular workspace
* [deleteToken](docs/sdks/workspaces/README.md#deletetoken) - Delete a token for a particular workspace
* [getByID](docs/sdks/workspaces/README.md#getbyid) - Get workspace
* [get](docs/sdks/workspaces/README.md#get) - Get workspace by context
* [getFeatureFlags](docs/sdks/workspaces/README.md#getfeatureflags) - Get workspace feature flags
* [getSettings](docs/sdks/workspaces/README.md#getsettings) - Get workspace settings
* [getTeam](docs/sdks/workspaces/README.md#getteam) - Get team members for a particular workspace
* [getTokens](docs/sdks/workspaces/README.md#gettokens) - Get tokens for a particular workspace
* [getAll](docs/sdks/workspaces/README.md#getall) - Get workspaces for a user
* [grantAccess](docs/sdks/workspaces/README.md#grantaccess) - Grant a user access to a particular workspace
* [revokeAccess](docs/sdks/workspaces/README.md#revokeaccess) - Revoke a user's access to a particular workspace
* [setFeatureFlags](docs/sdks/workspaces/README.md#setfeatureflags) - Set workspace feature flags
* [update](docs/sdks/workspaces/README.md#update) - Update workspace details
* [updateSettings](docs/sdks/workspaces/README.md#updatesettings) - Update workspace settings

</details>
<!-- End Available Resources and Operations [operations] -->



<!-- Start Global Parameters [global-parameters] -->
## Global Parameters

A parameter is configured globally. This parameter may be set on the SDK client instance itself during initialization. When configured as an option during SDK initialization, This global value will be used as the default on the operations that use it. When such operations are called, there is a place in each to override the global value, if needed.

For example, you can set `workspace_id` to `'<id>'` at SDK initialization and then you do not have to pass the same value on calls to operations like `getAccessToken`. But if you want to do so you may, which will locally override the global setting. See the example code below for a demonstration.


### Available Globals

The following global parameter is available.

| Name        | Type   | Description                |
| ----------- | ------ | -------------------------- |
| workspaceId | string | The workspaceId parameter. |

### Example

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;

$sdk = SpeakeasyClientSDK\SDK::builder()->build();

$request = new Operations\GetAccessTokenRequest(
    workspaceId: '<id>',
);

$response = $sdk->auth->getAccessToken(
    request: $request
);

if ($response->accessToken !== null) {
    // handle response
}
```
<!-- End Global Parameters [global-parameters] -->

<!-- Start Retries [retries] -->
## Retries

Some of the endpoints in this SDK support retries. If you use the SDK without any configuration, it will fall back to the default retry strategy provided by the API. However, the default retry strategy can be overridden on a per-operation basis, or across the entire SDK.

To change the default retry strategy for a single API call, simply provide an `Options` object built with a `RetryConfig` object to the call:
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;
use Speakeasy\SpeakeasyClientSDK\Utils\Retry;

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            apiKey: '<YOUR_API_KEY_HERE>',
        )
    )
    ->build();

$request = new Operations\GetWorkspaceAccessRequest();

$response = $sdk->auth->getAccess(
    request: $request,
    options: Utils\Options->builder()->setRetryConfig(
        new Retry\RetryConfigBackoff(
            initialInterval: 1,
            maxInterval:     50,
            exponent:        1.1,
            maxElapsedTime:  100,
            retryConnectionErrors: false,
        ))->build()
);

if ($response->accessDetails !== null) {
    // handle response
}
```

If you'd like to override the default retry strategy for all operations that support retries, you can pass a `RetryConfig` object to the `SDKBuilder->setRetryConfig` function when initializing the SDK:
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;
use Speakeasy\SpeakeasyClientSDK\Utils\Retry;

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setRetryConfig(
        new Retry\RetryConfigBackoff(
            initialInterval: 1,
            maxInterval:     50,
            exponent:        1.1,
            maxElapsedTime:  100,
            retryConnectionErrors: false,
        )
  )
    ->setSecurity(
        new Shared\Security(
            apiKey: '<YOUR_API_KEY_HERE>',
        )
    )
    ->build();

$request = new Operations\GetWorkspaceAccessRequest();

$response = $sdk->auth->getAccess(
    request: $request
);

if ($response->accessDetails !== null) {
    // handle response
}
```
<!-- End Retries [retries] -->

<!-- Start Error Handling [errors] -->
## Error Handling

Handling errors in this SDK should largely match your expectations. All operations return a response object or throw an exception.

By default an API error will raise a `Errorors\SDKExceptioon` exception, which has the following properties:

| Property       | Type                                    | Description           |
|----------------|-----------------------------------------|-----------------------|
| `$message`     | *string*                                | The error message     |
| `$statusCode`  | *int*                                   | The HTTP status code  |
| `$rawResponse` | *?\Psr\Http\Message\ResponseInterface*  | The raw HTTP response |
| `$body`        | *string*                                | The response content  |

When custom error responses are specified for an operation, the SDK may also throw their associated exception. You can refer to respective *Errors* tables in SDK docs for more details on possible exception types for each operation. For example, the `setArchived` method throws the following exceptions:

| Error Type             | Status Code | Content Type     |
| ---------------------- | ----------- | ---------------- |
| Errorors\Error         | 4XX         | application/json |
| Errorors\SDKExceptioon | 5XX         | \*/\*            |

### Example

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Errorors;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            apiKey: '<YOUR_API_KEY_HERE>',
        )
    )
    ->build();

try {
    $request = new Operations\ArchiveNamespaceRequest(
        namespaceName: '<value>',
    );

    $response = $sdk->artifacts->setArchived(
        request: $request
    );

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Errorors\ErrorThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errorors\SDKExceptioon $e) {
    // handle default exception
    throw $e;
}
```
<!-- End Error Handling [errors] -->

<!-- Start Server Selection [server] -->
## Server Selection

### Select Server by Name

You can override the default server globally using the `setServer(string $serverName)` builder method when initializing the SDK client instance. The selected server will then be used as the default on the operations that use it. This table lists the names associated with the available servers:

| Name   | Server                              | Description |
| ------ | ----------------------------------- | ----------- |
| `prod` | `https://api.prod.speakeasyapi.dev` |             |

#### Example

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setServer('prod'
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

### Override Server URL Per-Client

The default server can also be overridden globally using the `setServerUrl(string $serverUrl)` builder method when initializing the SDK client instance. For example:
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setServerURL('https://api.prod.speakeasyapi.dev')
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
<!-- End Server Selection [server] -->

<!-- Start Summary [summary] -->
## Summary

Speakeasy API: The Subscriptions API manages subscriptions for CLI and registry events

For more information about the API: [The Speakeasy Platform Documentation](/docs)
<!-- End Summary [summary] -->

<!-- Start Table of Contents [toc] -->
## Table of Contents
<!-- $toc-max-depth=2 -->
* [speakeasy-api/speakeasy-client-sdk-php](#speakeasy-apispeakeasy-client-sdk-php)
  * [SDK Installation](#sdk-installation)
  * [SDK Example Usage](#sdk-example-usage)
  * [Authentication](#authentication)
  * [Available Resources and Operations](#available-resources-and-operations)
  * [Global Parameters](#global-parameters)
  * [Retries](#retries)
  * [Error Handling](#error-handling)
  * [Server Selection](#server-selection)

<!-- End Table of Contents [toc] -->

<!-- Placeholder for Future Speakeasy SDK Sections -->



### Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

### Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release !

### SDK Created by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)
