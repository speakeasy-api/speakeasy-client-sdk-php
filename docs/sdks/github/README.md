# Github


### Available Operations

* [checkAccess](#checkaccess)
* [configureCodeSamples](#configurecodesamples)
* [configureMintlifyRepo](#configuremintlifyrepo)
* [configureTarget](#configuretarget)
* [fetchPublishingPRs](#fetchpublishingprs)
* [getAction](#getaction)
* [githubCheckPublishingSecrets](#githubcheckpublishingsecrets)
* [githubStorePublishingSecrets](#githubstorepublishingsecrets)
* [triggerAction](#triggeraction)

## checkAccess

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
    $request = new Operations\CheckAccessRequest(
        org: '<value>',
        repo: '<value>',
    );
    $response = $sdk->github->checkAccess($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\CheckAccessRequest](../../Models/Operations/CheckAccessRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |


### Response

**[?Operations\CheckAccessResponse](../../Models/Operations/CheckAccessResponse.md)**
### Errors

| Error Object                                            | Status Code                                             | Content Type                                            |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| Speakeasy\SpeakeasyClientSDK\Models\Errors.SDKException | 4xx-5xx                                                 | */*                                                     |

## configureCodeSamples

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
    $request = new Shared\GithubConfigureCodeSamplesRequest(
        org: '<value>',
        repo: '<value>',
        targetName: '<value>',
    );
    $response = $sdk->github->configureCodeSamples($request);

    if ($response->githubConfigureCodeSamplesResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Shared\GithubConfigureCodeSamplesRequest](../../Models/Shared/GithubConfigureCodeSamplesRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?Operations\ConfigureCodeSamplesResponse](../../Models/Operations/ConfigureCodeSamplesResponse.md)**
### Errors

| Error Object                                            | Status Code                                             | Content Type                                            |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| Speakeasy\SpeakeasyClientSDK\Models\Errors.SDKException | 4xx-5xx                                                 | */*                                                     |

## configureMintlifyRepo

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
    $request = new Shared\GithubConfigureMintlifyRepoRequest(
        input: '<value>',
        org: '<value>',
        overlays: [
            '<value>',
        ],
        repo: '<value>',
        subdirectory: '<value>',
    );
    $response = $sdk->github->configureMintlifyRepo($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Shared\GithubConfigureMintlifyRepoRequest](../../Models/Shared/GithubConfigureMintlifyRepoRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?Operations\ConfigureMintlifyRepoResponse](../../Models/Operations/ConfigureMintlifyRepoResponse.md)**
### Errors

| Error Object                                            | Status Code                                             | Content Type                                            |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| Speakeasy\SpeakeasyClientSDK\Models\Errors.SDKException | 4xx-5xx                                                 | */*                                                     |

## configureTarget

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
    $request = new Shared\GithubConfigureTargetRequest(
        org: '<value>',
        repoName: '<value>',
    );
    $response = $sdk->github->configureTarget($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Shared\GithubConfigureTargetRequest](../../Models/Shared/GithubConfigureTargetRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |


### Response

**[?Operations\ConfigureTargetResponse](../../Models/Operations/ConfigureTargetResponse.md)**
### Errors

| Error Object                                            | Status Code                                             | Content Type                                            |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| Speakeasy\SpeakeasyClientSDK\Models\Errors.SDKException | 4xx-5xx                                                 | */*                                                     |

## fetchPublishingPRs

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
    $request = new Operations\FetchPublishingPRsRequest(
        generateGenLockId: '<value>',
        org: '<value>',
        repo: '<value>',
    );
    $response = $sdk->github->fetchPublishingPRs($request);

    if ($response->githubPublishingPRResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\FetchPublishingPRsRequest](../../Models/Operations/FetchPublishingPRsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |


### Response

**[?Operations\FetchPublishingPRsResponse](../../Models/Operations/FetchPublishingPRsResponse.md)**
### Errors

| Error Object                                            | Status Code                                             | Content Type                                            |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| Speakeasy\SpeakeasyClientSDK\Models\Errors.SDKException | 4xx-5xx                                                 | */*                                                     |

## getAction

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
    $request = new Operations\GetActionRequest(
        org: '<value>',
        repo: '<value>',
        targetName: '<value>',
    );
    $response = $sdk->github->getAction($request);

    if ($response->githubGetActionResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                  | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `$request`                                                                 | [Operations\GetActionRequest](../../Models/Operations/GetActionRequest.md) | :heavy_check_mark:                                                         | The request object to use for the request.                                 |


### Response

**[?Operations\GetActionResponse](../../Models/Operations/GetActionResponse.md)**
### Errors

| Error Object                                            | Status Code                                             | Content Type                                            |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| Speakeasy\SpeakeasyClientSDK\Models\Errors.SDKException | 4xx-5xx                                                 | */*                                                     |

## githubCheckPublishingSecrets

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
    $request = new Operations\GithubCheckPublishingSecretsRequest(
        generateGenLockId: '<value>',
    );
    $response = $sdk->github->githubCheckPublishingSecrets($request);

    if ($response->githubMissingPublishingSecretsResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\GithubCheckPublishingSecretsRequest](../../Models/Operations/GithubCheckPublishingSecretsRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |


### Response

**[?Operations\GithubCheckPublishingSecretsResponse](../../Models/Operations/GithubCheckPublishingSecretsResponse.md)**
### Errors

| Error Object                                            | Status Code                                             | Content Type                                            |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| Speakeasy\SpeakeasyClientSDK\Models\Errors.SDKException | 4xx-5xx                                                 | */*                                                     |

## githubStorePublishingSecrets

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
    $request = new Shared\GithubStorePublishingSecretsRequest(
        generateGenLockId: '<value>',
        secrets: [
            'Diesel' => '<value>',
        ],
    );
    $response = $sdk->github->githubStorePublishingSecrets($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Shared\GithubStorePublishingSecretsRequest](../../Models/Shared/GithubStorePublishingSecretsRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?Operations\GithubStorePublishingSecretsResponse](../../Models/Operations/GithubStorePublishingSecretsResponse.md)**
### Errors

| Error Object                                            | Status Code                                             | Content Type                                            |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| Speakeasy\SpeakeasyClientSDK\Models\Errors.SDKException | 4xx-5xx                                                 | */*                                                     |

## triggerAction

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
    $request = new Shared\GithubTriggerActionRequest(
        genLockId: '<value>',
        org: '<value>',
        repoName: '<value>',
        setVersion: '<value>',
        targetName: '<value>',
    );
    $response = $sdk->github->triggerAction($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Shared\GithubTriggerActionRequest](../../Models/Shared/GithubTriggerActionRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |


### Response

**[?Operations\TriggerActionResponse](../../Models/Operations/TriggerActionResponse.md)**
### Errors

| Error Object                                            | Status Code                                             | Content Type                                            |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| Speakeasy\SpeakeasyClientSDK\Models\Errors.SDKException | 4xx-5xx                                                 | */*                                                     |
