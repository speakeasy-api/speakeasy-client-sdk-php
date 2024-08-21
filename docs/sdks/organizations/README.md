# Organizations


### Available Operations

* [createFreeTrial](#createfreetrial) - Create a free trial for an organization
* [getOrganization](#getorganization) - Get organization
* [getOrganizationUsage](#getorganizationusage) - Get billing usage summary for a particular organization
* [getOrganizations](#getorganizations) - Get organizations for a user

## createFreeTrial

Creates a free trial for an organization

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
    $response = $sdk->organizations->createFreeTrial();

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```




### Response

**[?Operations\CreateFreeTrialResponse](../../Models/Operations/CreateFreeTrialResponse.md)**
### Errors

| Error Object                                            | Status Code                                             | Content Type                                            |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| Speakeasy\SpeakeasyClientSDK\Models\Errors.SDKException | 4xx-5xx                                                 | */*                                                     |

## getOrganization

Get information about a particular organization.

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
    $request = new Operations\GetOrganizationRequest(
        organizationID: '<value>',
    );
    $response = $sdk->organizations->getOrganization($request);

    if ($response->organization !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetOrganizationRequest](../../Models/Operations/GetOrganizationRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |


### Response

**[?Operations\GetOrganizationResponse](../../Models/Operations/GetOrganizationResponse.md)**
### Errors

| Error Object                                            | Status Code                                             | Content Type                                            |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| Speakeasy\SpeakeasyClientSDK\Models\Errors.SDKException | 4xx-5xx                                                 | */*                                                     |

## getOrganizationUsage

Returns a billing usage summary by target languages for a particular organization

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
    $response = $sdk->organizations->getOrganizationUsage();

    if ($response->organizationUsageResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```




### Response

**[?Operations\GetOrganizationUsageResponse](../../Models/Operations/GetOrganizationUsageResponse.md)**
### Errors

| Error Object                                            | Status Code                                             | Content Type                                            |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| Speakeasy\SpeakeasyClientSDK\Models\Errors.SDKException | 4xx-5xx                                                 | */*                                                     |

## getOrganizations

Returns a list of organizations a user has access too

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
    $response = $sdk->organizations->getOrganizations();

    if ($response->organizations !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```




### Response

**[?Operations\GetOrganizationsResponse](../../Models/Operations/GetOrganizationsResponse.md)**
### Errors

| Error Object                                            | Status Code                                             | Content Type                                            |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| Speakeasy\SpeakeasyClientSDK\Models\Errors.SDKException | 4xx-5xx                                                 | */*                                                     |
