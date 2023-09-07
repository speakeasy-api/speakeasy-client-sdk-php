# plugins

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
    $request->filters->limit = 774234;
    $request->filters->offset = 736918;
    $request->filters->operator = 'esse';
    $request->pluginID = 'ipsum';

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
    $request->code = 'excepturi';
    $request->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-12-25T03:24:03.949Z');
    $request->evalHash = 'ad';
    $request->pluginId = 'natus';
    $request->title = 'Mr.';
    $request->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-07-22T16:55:44.795Z');
    $request->workspaceId = 'natus';

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

