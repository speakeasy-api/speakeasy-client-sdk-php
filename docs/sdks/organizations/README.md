# Organizations
(*organizations*)

## Overview

### Available Operations

* [create](#create) - Create an organization
* [createFreeTrial](#createfreetrial) - Create a free trial for an organization
* [get](#get) - Get organization
* [getAll](#getall) - Get organizations for a user
* [getUsage](#getusage) - Get billing usage summary for a particular organization

## create

Creates an organization

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

$request = new Shared\Organization(
    accountType: Shared\AccountType::ScaleUp,
    createdAt: Utils\Utils::parseDateTime('2023-12-01T17:06:07.804Z'),
    id: '<id>',
    name: '<value>',
    slug: '<value>',
    telemetryDisabled: false,
    updatedAt: Utils\Utils::parseDateTime('2023-04-03T12:48:32.253Z'),
);

$response = $sdk->organizations->create(
    request: $request
);

if ($response->organization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                  | Type                                                       | Required                                                   | Description                                                |
| ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- |
| `$request`                                                 | [Shared\Organization](../../Models/Shared/Organization.md) | :heavy_check_mark:                                         | The request object to use for the request.                 |

### Response

**[?Operations\CreateOrganizationResponse](../../Models/Operations/CreateOrganizationResponse.md)**

### Errors

| Error Object                                              | Status Code                                               | Content Type                                              |
| --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- |
| Errorors\Error                                            | 4XX                                                       | application/json                                          |
| Speakeasy\SpeakeasyClientSDK\Models\Errorors.SDKException | 4xx-5xx                                                   | */*                                                       |


## createFreeTrial

Creates a free trial for an organization

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



$response = $sdk->organizations->createFreeTrial(

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Response

**[?Operations\CreateFreeTrialResponse](../../Models/Operations/CreateFreeTrialResponse.md)**

### Errors

| Error Object                                              | Status Code                                               | Content Type                                              |
| --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- |
| Errorors\Error                                            | 4XX                                                       | application/json                                          |
| Speakeasy\SpeakeasyClientSDK\Models\Errorors.SDKException | 4xx-5xx                                                   | */*                                                       |


## get

Get information about a particular organization.

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

$request = new Operations\GetOrganizationRequest(
    organizationID: '<id>',
);

$response = $sdk->organizations->get(
    request: $request
);

if ($response->organization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetOrganizationRequest](../../Models/Operations/GetOrganizationRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetOrganizationResponse](../../Models/Operations/GetOrganizationResponse.md)**

### Errors

| Error Object                                              | Status Code                                               | Content Type                                              |
| --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- |
| Errorors\Error                                            | 4XX                                                       | application/json                                          |
| Speakeasy\SpeakeasyClientSDK\Models\Errorors.SDKException | 4xx-5xx                                                   | */*                                                       |


## getAll

Returns a list of organizations a user has access too

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



$response = $sdk->organizations->getAll(

);

if ($response->organizations !== null) {
    // handle response
}
```

### Response

**[?Operations\GetOrganizationsResponse](../../Models/Operations/GetOrganizationsResponse.md)**

### Errors

| Error Object                                              | Status Code                                               | Content Type                                              |
| --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- |
| Errorors\Error                                            | 4XX                                                       | application/json                                          |
| Speakeasy\SpeakeasyClientSDK\Models\Errorors.SDKException | 4xx-5xx                                                   | */*                                                       |


## getUsage

Returns a billing usage summary by target languages for a particular organization

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



$response = $sdk->organizations->getUsage(

);

if ($response->organizationUsageResponse !== null) {
    // handle response
}
```

### Response

**[?Operations\GetOrganizationUsageResponse](../../Models/Operations/GetOrganizationUsageResponse.md)**

### Errors

| Error Object                                              | Status Code                                               | Content Type                                              |
| --------------------------------------------------------- | --------------------------------------------------------- | --------------------------------------------------------- |
| Errorors\Error                                            | 4XX                                                       | application/json                                          |
| Speakeasy\SpeakeasyClientSDK\Models\Errorors.SDKException | 4xx-5xx                                                   | */*                                                       |
