# Organizations
(*organizations*)

## Overview

REST APIs for managing Organizations (speakeasy L1 Tenancy construct)

### Available Operations

* [createFreeTrial](#createfreetrial) - Create a free trial for an organization
* [create](#create) - Create an organization
* [get](#get) - Get organization
* [getUsage](#getusage) - Get billing usage summary for a particular organization
* [getAll](#getall) - Get organizations for a user

## createFreeTrial

Creates a free trial for an organization

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



$response = $sdk->organizations->createFreeTrial(

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Response

**[?Operations\CreateFreeTrialResponse](../../Models/Operations/CreateFreeTrialResponse.md)**

### Errors

| Error Type            | Status Code           | Content Type          |
| --------------------- | --------------------- | --------------------- |
| Errorors\Error        | 4XX                   | application/json      |
| Errorors\SDKException | 5XX                   | \*/\*                 |

## create

Creates an organization

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;
use Speakeasy\SpeakeasyClientSDK\Utils;

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setSecurity(
        new Shared\Security(
            apiKey: '<YOUR_API_KEY_HERE>',
        )
    )
    ->build();

$request = new Shared\Organization(
    accountType: Shared\AccountType::ScaleUp,
    createdAt: Utils\Utils::parseDateTime('2024-11-30T17:06:07.804Z'),
    id: '<id>',
    name: '<value>',
    slug: '<value>',
    ssoActivated: false,
    telemetryDisabled: false,
    updatedAt: Utils\Utils::parseDateTime('2024-04-02T12:48:32.253Z'),
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

| Error Type            | Status Code           | Content Type          |
| --------------------- | --------------------- | --------------------- |
| Errorors\Error        | 4XX                   | application/json      |
| Errorors\SDKException | 5XX                   | \*/\*                 |

## get

Get information about a particular organization.

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

| Error Type            | Status Code           | Content Type          |
| --------------------- | --------------------- | --------------------- |
| Errorors\Error        | 4XX                   | application/json      |
| Errorors\SDKException | 5XX                   | \*/\*                 |

## getUsage

Returns a billing usage summary by target languages for a particular organization

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



$response = $sdk->organizations->getUsage(

);

if ($response->organizationUsageResponse !== null) {
    // handle response
}
```

### Response

**[?Operations\GetOrganizationUsageResponse](../../Models/Operations/GetOrganizationUsageResponse.md)**

### Errors

| Error Type            | Status Code           | Content Type          |
| --------------------- | --------------------- | --------------------- |
| Errorors\Error        | 4XX                   | application/json      |
| Errorors\SDKException | 5XX                   | \*/\*                 |

## getAll

Returns a list of organizations a user has access too

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



$response = $sdk->organizations->getAll(

);

if ($response->organizations !== null) {
    // handle response
}
```

### Response

**[?Operations\GetOrganizationsResponse](../../Models/Operations/GetOrganizationsResponse.md)**

### Errors

| Error Type            | Status Code           | Content Type          |
| --------------------- | --------------------- | --------------------- |
| Errorors\Error        | 4XX                   | application/json      |
| Errorors\SDKException | 5XX                   | \*/\*                 |