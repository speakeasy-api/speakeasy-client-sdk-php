# Plugins

## Overview

REST APIs for managing and running plugins

### Available Operations

* [getPlugins](#getplugins) - Get all plugins for the current workspace.
* [runPlugin](#runplugin) - Run a plugin
* [upsertPlugin](#upsertplugin) - Upsert a plugin

## getPlugins

Get all plugins for the current workspace.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;

$sdk = SDK::builder()
    ->build();

try {
    $response = $sdk->plugins->getPlugins();

    if ($response->plugins !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetPluginsResponse](../../models/operations/GetPluginsResponse.md)**


## runPlugin

Run a plugin

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations\RunPluginRequest;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Filters;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Filter;

$sdk = SDK::builder()
    ->build();

try {
    $request = new RunPluginRequest();
    $request->filters = new Filters();
    $request->filters->filters = [
        new Filter(),
    ];
    $request->filters->limit = 456150;
    $request->filters->offset = 216550;
    $request->filters->operator = 'excepturi';
    $request->pluginID = 'aspernatur';

    $response = $sdk->plugins->runPlugin($request);

    if ($response->boundedRequests !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\RunPluginRequest](../../models/operations/RunPluginRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\RunPluginResponse](../../models/operations/RunPluginResponse.md)**


## upsertPlugin

Upsert a plugin

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK\SDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Security;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared\Plugin;

$sdk = SDK::builder()
    ->build();

try {
    $request = new Plugin();
    $request->code = 'perferendis';
    $request->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-20T13:30:46.463Z');
    $request->evalHash = 'sed';
    $request->pluginId = 'iste';
    $request->title = 'Mrs.';
    $request->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-03-24T20:42:46.563Z');
    $request->workspaceId = 'hic';

    $response = $sdk->plugins->upsertPlugin($request);

    if ($response->plugin !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                           | Type                                                                                | Required                                                                            | Description                                                                         |
| ----------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------- |
| `$request`                                                                          | [\Speakeasy\SpeakeasyClientSDK\Models\Shared\Plugin](../../models/shared/Plugin.md) | :heavy_check_mark:                                                                  | The request object to use for the request.                                          |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\UpsertPluginResponse](../../models/operations/UpsertPluginResponse.md)**

