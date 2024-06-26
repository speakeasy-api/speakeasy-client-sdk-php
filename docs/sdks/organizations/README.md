# Organizations


### Available Operations

* [createFreeTrial](#createfreetrial) - Create a free trial for an organization
* [getOrganizationUsage](#getorganizationusage) - Get billing usage summary for a particular organization
* [getOrganizations](#getorganizations) - Get organizations for a user

## createFreeTrial

Creates a free trial for an organization

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
    $response = $sdk->organizations->createFreeTrial();

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\CreateFreeTrialResponse](../../Models/Operations/CreateFreeTrialResponse.md)**


## getOrganizationUsage

Returns a billing usage summary by target languages for a particular organization

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
    $response = $sdk->organizations->getOrganizationUsage();

    if ($response->organizationUsageResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetOrganizationUsageResponse](../../Models/Operations/GetOrganizationUsageResponse.md)**


## getOrganizations

Returns a list of organizations a user has access too

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
    $response = $sdk->organizations->getOrganizations();

    if ($response->organizations !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetOrganizationsResponse](../../Models/Operations/GetOrganizationsResponse.md)**

