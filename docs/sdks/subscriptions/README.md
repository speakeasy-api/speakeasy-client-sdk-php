# Subscriptions
(*subscriptions*)

## Overview

REST APIs for managing subscriptions

### Available Operations

* [createSubscription](#createsubscription) - Create Subscription
* [listRegistrySubscriptions](#listregistrysubscriptions) - List Subscriptions

## createSubscription

Create Subscription

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

$request = new Operations\CreateSubscriptionRequest(
    registrySubscription: new Shared\RegistrySubscription(
        createdAt: Utils\Utils::parseDateTime('2022-06-08T17:58:57.702Z'),
        eventType: Shared\EventType::Update,
        id: '<id>',
        namespaceName: '<value>',
        subscriptionSettings: '<value>',
        subscriptionType: Shared\SubscriptionType::Cli,
        updatedAt: Utils\Utils::parseDateTime('2022-07-20T08:51:35.776Z'),
        workspaceId: '<id>',
    ),
    workspaceId: '<id>',
);

$response = $sdk->subscriptions->createSubscription(
    request: $request
);

if ($response->registrySubscription !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateSubscriptionRequest](../../Models/Operations/CreateSubscriptionRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateSubscriptionResponse](../../Models/Operations/CreateSubscriptionResponse.md)**

### Errors

| Error Type            | Status Code           | Content Type          |
| --------------------- | --------------------- | --------------------- |
| Errorors\SDKException | 4XX, 5XX              | \*/\*                 |

## listRegistrySubscriptions

List Subscriptions

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

$request = new Operations\ListRegistrySubscriptionsRequest(
    workspaceId: '<id>',
);

$response = $sdk->subscriptions->listRegistrySubscriptions(
    request: $request
);

if ($response->classes !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\ListRegistrySubscriptionsRequest](../../Models/Operations/ListRegistrySubscriptionsRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\ListRegistrySubscriptionsResponse](../../Models/Operations/ListRegistrySubscriptionsResponse.md)**

### Errors

| Error Type            | Status Code           | Content Type          |
| --------------------- | --------------------- | --------------------- |
| Errorors\SDKException | 4XX, 5XX              | \*/\*                 |