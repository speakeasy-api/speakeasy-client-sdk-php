# Github


### Available Operations

* [githubCheckAccess](#githubcheckaccess)
* [githubConfigureTarget](#githubconfiguretarget)
* [githubTriggerAction](#githubtriggeraction)

## githubCheckAccess

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
        $request = new Operations\GithubCheckAccessRequest();
    $request->org = '<value>';
    $request->repo = '<value>';;

    $response = $sdk->github->githubCheckAccess($request);

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
| `$request`                                                                                                                      | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\GithubCheckAccessRequest](../../Models/Operations/GithubCheckAccessRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GithubCheckAccessResponse](../../Models/Operations/GithubCheckAccessResponse.md)**


## githubConfigureTarget

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

    $response = $sdk->github->githubConfigureTarget($request);

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

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GithubConfigureTargetResponse](../../Models/Operations/GithubConfigureTargetResponse.md)**


## githubTriggerAction

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

    $response = $sdk->github->githubTriggerAction($request);

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

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GithubTriggerActionResponse](../../Models/Operations/GithubTriggerActionResponse.md)**
