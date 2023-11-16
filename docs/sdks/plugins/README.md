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

use \Speakeasy\SpeakeasyClientSDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $response = $sdk->plugins->getPlugins();

    if ($response->classes !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetPluginsResponse](../../Models/Operations/GetPluginsResponse.md)**


## runPlugin

Run a plugin

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared;
use \Speakeasy\SpeakeasyClientSDK\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\RunPluginRequest();
    $request->filters = new Shared\Filters();
    $request->filters->filters = [
        new Shared\Filter(),
    ];
    $request->filters->limit = 669298;
    $request->filters->offset = 94585;
    $request->filters->operator = 'string';
    $request->pluginID = 'string';

    $response = $sdk->plugins->runPlugin($request);

    if ($response->classes !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\RunPluginRequest](../../Models/Operations/RunPluginRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\RunPluginResponse](../../Models/Operations/RunPluginResponse.md)**


## upsertPlugin

Upsert a plugin

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Speakeasy\SpeakeasyClientSDK;
use \Speakeasy\SpeakeasyClientSDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Shared\Plugin();
    $request->code = 'string';
    $request->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-12-29T22:47:21.364Z');
    $request->evalHash = 'string';
    $request->pluginId = 'string';
    $request->title = 'string';
    $request->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-18T05:20:47.765Z');
    $request->workspaceId = 'string';

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
| `$request`                                                                          | [\Speakeasy\SpeakeasyClientSDK\Models\Shared\Plugin](../../Models/Shared/Plugin.md) | :heavy_check_mark:                                                                  | The request object to use for the request.                                          |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\UpsertPluginResponse](../../Models/Operations/UpsertPluginResponse.md)**

