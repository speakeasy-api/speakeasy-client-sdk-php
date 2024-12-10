# Workspaces
(*workspaces*)

## Overview

REST APIs for managing Workspaces (speakeasy tenancy)

### Available Operations

* [create](#create) - Create a workspace
* [createToken](#createtoken) - Create a token for a particular workspace
* [deleteToken](#deletetoken) - Delete a token for a particular workspace
* [get](#get) - Get workspace by context
* [getAll](#getall) - Get workspaces for a user
* [getByID](#getbyid) - Get workspace
* [getFeatureFlags](#getfeatureflags) - Get workspace feature flags
* [getSettings](#getsettings) - Get workspace settings
* [getTeam](#getteam) - Get team members for a particular workspace
* [getTokens](#gettokens) - Get tokens for a particular workspace
* [grantAccess](#grantaccess) - Grant a user access to a particular workspace
* [revokeAccess](#revokeaccess) - Revoke a user's access to a particular workspace
* [update](#update) - Update workspace details
* [updateSettings](#updatesettings) - Update workspace settings

## create

Creates a workspace

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;
use Speakeasy\SpeakeasyClientSDK\Utils;

$security = new Shared\Security(
    apiKey: '<YOUR_API_KEY_HERE>',
);

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

$request = new Shared\Workspace(
    createdAt: Utils\Utils::parseDateTime('2023-06-18T07:14:55.338Z'),
    id: '<id>',
    name: '<value>',
    organizationId: '<id>',
    slug: '<value>',
    updatedAt: Utils\Utils::parseDateTime('2023-12-01T17:06:07.804Z'),
    verified: false,
);

$response = $sdk->workspaces->create(
    request: $request
);

if ($response->workspace !== null) {
    // handle response
}
```

### Parameters

| Parameter                                            | Type                                                 | Required                                             | Description                                          |
| ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- |
| `$request`                                           | [Shared\Workspace](../../Models/Shared/Workspace.md) | :heavy_check_mark:                                   | The request object to use for the request.           |

### Response

**[?Operations\CreateWorkspaceResponse](../../Models/Operations/CreateWorkspaceResponse.md)**

### Errors

| Error Type            | Status Code           | Content Type          |
| --------------------- | --------------------- | --------------------- |
| Errorors\Error        | 4XX                   | application/json      |
| Errorors\SDKException | 5XX                   | \*/\*                 |

## createToken

Create a token for a particular workspace

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;
use Speakeasy\SpeakeasyClientSDK\Utils;

$security = new Shared\Security(
    apiKey: '<YOUR_API_KEY_HERE>',
);

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

$request = new Operations\CreateWorkspaceTokenRequest(
    workspaceToken: new Shared\WorkspaceToken(
        alg: '<value>',
        createdAt: Utils\Utils::parseDateTime('2022-08-16T02:33:00.784Z'),
        id: '<id>',
        key: '<key>',
        name: '<value>',
        workspaceId: '<id>',
    ),
);

$response = $sdk->workspaces->createToken(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateWorkspaceTokenRequest](../../Models/Operations/CreateWorkspaceTokenRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateWorkspaceTokenResponse](../../Models/Operations/CreateWorkspaceTokenResponse.md)**

### Errors

| Error Type            | Status Code           | Content Type          |
| --------------------- | --------------------- | --------------------- |
| Errorors\Error        | 4XX                   | application/json      |
| Errorors\SDKException | 5XX                   | \*/\*                 |

## deleteToken

Delete a token for a particular workspace

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security(
    apiKey: '<YOUR_API_KEY_HERE>',
);

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

$request = new Operations\DeleteWorkspaceTokenRequest(
    tokenID: '<id>',
);

$response = $sdk->workspaces->deleteToken(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\DeleteWorkspaceTokenRequest](../../Models/Operations/DeleteWorkspaceTokenRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\DeleteWorkspaceTokenResponse](../../Models/Operations/DeleteWorkspaceTokenResponse.md)**

### Errors

| Error Type            | Status Code           | Content Type          |
| --------------------- | --------------------- | --------------------- |
| Errorors\Error        | 4XX                   | application/json      |
| Errorors\SDKException | 5XX                   | \*/\*                 |

## get

Get information about a particular workspace by context.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security(
    apiKey: '<YOUR_API_KEY_HERE>',
);

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();



$response = $sdk->workspaces->get(

);

if ($response->workspaceAndOrganization !== null) {
    // handle response
}
```

### Response

**[?Operations\GetWorkspaceByContextResponse](../../Models/Operations/GetWorkspaceByContextResponse.md)**

### Errors

| Error Type            | Status Code           | Content Type          |
| --------------------- | --------------------- | --------------------- |
| Errorors\Error        | 4XX                   | application/json      |
| Errorors\SDKException | 5XX                   | \*/\*                 |

## getAll

Returns a list of workspaces a user has access too

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security(
    apiKey: '<YOUR_API_KEY_HERE>',
);

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();



$response = $sdk->workspaces->getAll(

);

if ($response->workspaces !== null) {
    // handle response
}
```

### Response

**[?Operations\GetWorkspacesResponse](../../Models/Operations/GetWorkspacesResponse.md)**

### Errors

| Error Type            | Status Code           | Content Type          |
| --------------------- | --------------------- | --------------------- |
| Errorors\Error        | 4XX                   | application/json      |
| Errorors\SDKException | 5XX                   | \*/\*                 |

## getByID

Get information about a particular workspace.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security(
    apiKey: '<YOUR_API_KEY_HERE>',
);

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

$request = new Operations\GetWorkspaceRequest();

$response = $sdk->workspaces->getByID(
    request: $request
);

if ($response->workspace !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetWorkspaceRequest](../../Models/Operations/GetWorkspaceRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\GetWorkspaceResponse](../../Models/Operations/GetWorkspaceResponse.md)**

### Errors

| Error Type            | Status Code           | Content Type          |
| --------------------- | --------------------- | --------------------- |
| Errorors\Error        | 4XX                   | application/json      |
| Errorors\SDKException | 5XX                   | \*/\*                 |

## getFeatureFlags

Get workspace feature flags

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security(
    apiKey: '<YOUR_API_KEY_HERE>',
);

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

$request = new Operations\GetWorkspaceFeatureFlagsRequest();

$response = $sdk->workspaces->getFeatureFlags(
    request: $request
);

if ($response->workspaceFeatureFlagResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\GetWorkspaceFeatureFlagsRequest](../../Models/Operations/GetWorkspaceFeatureFlagsRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\GetWorkspaceFeatureFlagsResponse](../../Models/Operations/GetWorkspaceFeatureFlagsResponse.md)**

### Errors

| Error Type            | Status Code           | Content Type          |
| --------------------- | --------------------- | --------------------- |
| Errorors\Error        | 5XX                   | application/json      |
| Errorors\SDKException | 4XX                   | \*/\*                 |

## getSettings

Get settings about a particular workspace.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security(
    apiKey: '<YOUR_API_KEY_HERE>',
);

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

$request = new Operations\GetWorkspaceSettingsRequest();

$response = $sdk->workspaces->getSettings(
    request: $request
);

if ($response->workspaceSettings !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetWorkspaceSettingsRequest](../../Models/Operations/GetWorkspaceSettingsRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetWorkspaceSettingsResponse](../../Models/Operations/GetWorkspaceSettingsResponse.md)**

### Errors

| Error Type            | Status Code           | Content Type          |
| --------------------- | --------------------- | --------------------- |
| Errorors\Error        | 4XX                   | application/json      |
| Errorors\SDKException | 5XX                   | \*/\*                 |

## getTeam

Get team members for a particular workspace

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security(
    apiKey: '<YOUR_API_KEY_HERE>',
);

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

$request = new Operations\GetWorkspaceTeamRequest();

$response = $sdk->workspaces->getTeam(
    request: $request
);

if ($response->workspaceTeamResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetWorkspaceTeamRequest](../../Models/Operations/GetWorkspaceTeamRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetWorkspaceTeamResponse](../../Models/Operations/GetWorkspaceTeamResponse.md)**

### Errors

| Error Type            | Status Code           | Content Type          |
| --------------------- | --------------------- | --------------------- |
| Errorors\Error        | 4XX                   | application/json      |
| Errorors\SDKException | 5XX                   | \*/\*                 |

## getTokens

Get tokens for a particular workspace

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security(
    apiKey: '<YOUR_API_KEY_HERE>',
);

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

$request = new Operations\GetWorkspaceTokensRequest();

$response = $sdk->workspaces->getTokens(
    request: $request
);

if ($response->classes !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetWorkspaceTokensRequest](../../Models/Operations/GetWorkspaceTokensRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetWorkspaceTokensResponse](../../Models/Operations/GetWorkspaceTokensResponse.md)**

### Errors

| Error Type            | Status Code           | Content Type          |
| --------------------- | --------------------- | --------------------- |
| Errorors\Error        | 4XX                   | application/json      |
| Errorors\SDKException | 5XX                   | \*/\*                 |

## grantAccess

Grant a user access to a particular workspace

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security(
    apiKey: '<YOUR_API_KEY_HERE>',
);

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

$request = new Operations\GrantUserAccessToWorkspaceRequest(
    email: 'Lucinda.Batz8@hotmail.com',
);

$response = $sdk->workspaces->grantAccess(
    request: $request
);

if ($response->workspaceInviteResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\GrantUserAccessToWorkspaceRequest](../../Models/Operations/GrantUserAccessToWorkspaceRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\GrantUserAccessToWorkspaceResponse](../../Models/Operations/GrantUserAccessToWorkspaceResponse.md)**

### Errors

| Error Type            | Status Code           | Content Type          |
| --------------------- | --------------------- | --------------------- |
| Errorors\Error        | 4XX                   | application/json      |
| Errorors\SDKException | 5XX                   | \*/\*                 |

## revokeAccess

Revoke a user's access to a particular workspace

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security(
    apiKey: '<YOUR_API_KEY_HERE>',
);

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

$request = new Operations\RevokeUserAccessToWorkspaceRequest(
    userId: '<id>',
);

$response = $sdk->workspaces->revokeAccess(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\RevokeUserAccessToWorkspaceRequest](../../Models/Operations/RevokeUserAccessToWorkspaceRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\RevokeUserAccessToWorkspaceResponse](../../Models/Operations/RevokeUserAccessToWorkspaceResponse.md)**

### Errors

| Error Type            | Status Code           | Content Type          |
| --------------------- | --------------------- | --------------------- |
| Errorors\Error        | 4XX                   | application/json      |
| Errorors\SDKException | 5XX                   | \*/\*                 |

## update

Update information about a particular workspace.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;
use Speakeasy\SpeakeasyClientSDK\Utils;

$security = new Shared\Security(
    apiKey: '<YOUR_API_KEY_HERE>',
);

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

$request = new Operations\UpdateWorkspaceDetailsRequest(
    workspace: new Shared\Workspace(
        createdAt: Utils\Utils::parseDateTime('2024-07-28T19:04:48.565Z'),
        id: '<id>',
        name: '<value>',
        organizationId: '<id>',
        slug: '<value>',
        updatedAt: Utils\Utils::parseDateTime('2023-10-17T10:52:42.015Z'),
        verified: false,
    ),
);

$response = $sdk->workspaces->update(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\UpdateWorkspaceDetailsRequest](../../Models/Operations/UpdateWorkspaceDetailsRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\UpdateWorkspaceDetailsResponse](../../Models/Operations/UpdateWorkspaceDetailsResponse.md)**

### Errors

| Error Type            | Status Code           | Content Type          |
| --------------------- | --------------------- | --------------------- |
| Errorors\Error        | 4XX                   | application/json      |
| Errorors\SDKException | 5XX                   | \*/\*                 |

## updateSettings

Update settings about a particular workspace.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;
use Speakeasy\SpeakeasyClientSDK\Utils;

$security = new Shared\Security(
    apiKey: '<YOUR_API_KEY_HERE>',
);

$sdk = SpeakeasyClientSDK\SDK::builder()->setSecurity($security)->build();

$request = new Operations\UpdateWorkspaceSettingsRequest(
    workspaceSettings: new Shared\WorkspaceSettings(
        createdAt: Utils\Utils::parseDateTime('2022-07-05T11:43:28.305Z'),
        updatedAt: Utils\Utils::parseDateTime('2023-05-15T05:39:21.874Z'),
        webhookUrl: 'https://grown-pharmacopoeia.net',
        workspaceId: '<id>',
    ),
);

$response = $sdk->workspaces->updateSettings(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateWorkspaceSettingsRequest](../../Models/Operations/UpdateWorkspaceSettingsRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateWorkspaceSettingsResponse](../../Models/Operations/UpdateWorkspaceSettingsResponse.md)**

### Errors

| Error Type            | Status Code           | Content Type          |
| --------------------- | --------------------- | --------------------- |
| Errorors\Error        | 4XX                   | application/json      |
| Errorors\SDKException | 5XX                   | \*/\*                 |