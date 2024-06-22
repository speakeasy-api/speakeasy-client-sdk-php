# Github


### Available Operations

* [checkAccess](#checkaccess)
* [configureCodeSamples](#configurecodesamples)
* [configureMintlifyRepo](#configuremintlifyrepo)
* [configureTarget](#configuretarget)
* [fetchPublishingPRs](#fetchpublishingprs)
* [githubCheckPublishingSecrets](#githubcheckpublishingsecrets)
* [githubStorePublishingSecrets](#githubstorepublishingsecrets)
* [triggerAction](#triggeraction)

## checkAccess

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
        $request = new Operations\CheckAccessRequest();
    $request->org = '<value>';
    $request->repo = '<value>';;

    $response = $sdk->github->checkAccess($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\CheckAccessRequest](../../Models/Operations/CheckAccessRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\CheckAccessResponse](../../Models/Operations/CheckAccessResponse.md)**


## configureCodeSamples

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Shared\GithubConfigureCodeSamplesRequest();
    $request->org = '<value>';
    $request->repo = '<value>';
    $request->targetName = '<value>';;

    $response = $sdk->github->configureCodeSamples($request);

    if ($response->githubConfigureCodeSamplesResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Speakeasy\SpeakeasyClientSDK\Models\Shared\GithubConfigureCodeSamplesRequest](../../Models/Shared/GithubConfigureCodeSamplesRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\ConfigureCodeSamplesResponse](../../Models/Operations/ConfigureCodeSamplesResponse.md)**


## configureMintlifyRepo

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Shared\GithubConfigureMintlifyRepoRequest();
    $request->input = '<value>';
    $request->org = '<value>';
    $request->overlays = [
        '<value>',
    ];
    $request->repo = '<value>';;

    $response = $sdk->github->configureMintlifyRepo($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Speakeasy\SpeakeasyClientSDK\Models\Shared\GithubConfigureMintlifyRepoRequest](../../Models/Shared/GithubConfigureMintlifyRepoRequest.md) | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\ConfigureMintlifyRepoResponse](../../Models/Operations/ConfigureMintlifyRepoResponse.md)**


## configureTarget

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Shared\GithubConfigureTargetRequest();
    $request->org = '<value>';
    $request->repoName = '<value>';;

    $response = $sdk->github->configureTarget($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Speakeasy\SpeakeasyClientSDK\Models\Shared\GithubConfigureTargetRequest](../../Models/Shared/GithubConfigureTargetRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\ConfigureTargetResponse](../../Models/Operations/ConfigureTargetResponse.md)**


## fetchPublishingPRs

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
        $request = new Operations\FetchPublishingPRsRequest();
    $request->generateGenLockId = '<value>';
    $request->org = '<value>';
    $request->repo = '<value>';;

    $response = $sdk->github->fetchPublishingPRs($request);

    if ($response->githubPublishingPRResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\FetchPublishingPRsRequest](../../Models/Operations/FetchPublishingPRsRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\FetchPublishingPRsResponse](../../Models/Operations/FetchPublishingPRsResponse.md)**


## githubCheckPublishingSecrets

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
        $request = new Operations\GithubCheckPublishingSecretsRequest();
    $request->generateGenLockId = '<value>';;

    $response = $sdk->github->githubCheckPublishingSecrets($request);

    if ($response->githubMissingPublishingSecretsResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                             | Type                                                                                                                                                  | Required                                                                                                                                              | Description                                                                                                                                           |
| ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                            | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\GithubCheckPublishingSecretsRequest](../../Models/Operations/GithubCheckPublishingSecretsRequest.md) | :heavy_check_mark:                                                                                                                                    | The request object to use for the request.                                                                                                            |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GithubCheckPublishingSecretsResponse](../../Models/Operations/GithubCheckPublishingSecretsResponse.md)**


## githubStorePublishingSecrets

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Shared\GithubStorePublishingSecretsRequest();
    $request->generateGenLockId = '<value>';
    $request->secrets = [
        'Diesel' => '<value>',
    ];;

    $response = $sdk->github->githubStorePublishingSecrets($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\Speakeasy\SpeakeasyClientSDK\Models\Shared\GithubStorePublishingSecretsRequest](../../Models/Shared/GithubStorePublishingSecretsRequest.md) | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GithubStorePublishingSecretsResponse](../../Models/Operations/GithubStorePublishingSecretsResponse.md)**


## triggerAction

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

try {
        $request = new Shared\GithubTriggerActionRequest();
    $request->genLockId = '<value>';
    $request->org = '<value>';
    $request->repoName = '<value>';
    $request->targetName = '<value>';;

    $response = $sdk->github->triggerAction($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Speakeasy\SpeakeasyClientSDK\Models\Shared\GithubTriggerActionRequest](../../Models/Shared/GithubTriggerActionRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\TriggerActionResponse](../../Models/Operations/TriggerActionResponse.md)**

