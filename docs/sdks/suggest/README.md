# Suggest


## Overview

REST APIs for managing LLM OAS suggestions

### Available Operations

* [applyOperationIDs](#applyoperationids) - Apply operation ID suggestions and download result.
* [suggestOperationIDs](#suggestoperationids) - Generate operation ID suggestions.
* [suggestOperationIDsRegistry](#suggestoperationidsregistry) - Generate operation ID suggestions.

## applyOperationIDs

Apply operation ID suggestions and download result.

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
        $request = new Operations\ApplyOperationIDsRequest();
    $request->requestBody = new Operations\ApplyOperationIDsRequestBody();
    $request->requestBody->asOverlay = false;
    $request->xSessionId = '<value>';;

    $response = $sdk->suggest->applyOperationIDs($request);

    if ($response->twoHundredApplicationJsonSchema !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\ApplyOperationIDsRequest](../../Models/Operations/ApplyOperationIDsRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\ApplyOperationIDsResponse](../../Models/Operations/ApplyOperationIDsResponse.md)**


## suggestOperationIDs

Get suggestions from an LLM model for improving the operationIDs in the provided schema.

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
        $request = new Operations\SuggestOperationIDsRequest();
    $request->requestBody = new Operations\SuggestOperationIDsRequestBody();
    $request->requestBody->opts = new Shared\SuggestOperationIDsOpts();
    $request->requestBody->opts->depthStyle = Shared\DepthStyle::Nested;
    $request->requestBody->opts->style = Shared\Style::Standardize;
    $request->requestBody->schema = new Operations\Schema();
    $request->requestBody->schema->content = '0xde88c98abc';
    $request->requestBody->schema->fileName = 'your_file_here';
    $request->limit = 5704.42;
    $request->xSessionId = '<value>';;

    $response = $sdk->suggest->suggestOperationIDs($request);

    if ($response->suggestedOperationIDs !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\SuggestOperationIDsRequest](../../Models/Operations/SuggestOperationIDsRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\SuggestOperationIDsResponse](../../Models/Operations/SuggestOperationIDsResponse.md)**


## suggestOperationIDsRegistry

Get suggestions from an LLM model for improving the operationIDs in the provided schema.

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
        $request = new Operations\SuggestOperationIDsRegistryRequest();
    $request->suggestOperationIDsOpts = new Shared\SuggestOperationIDsOpts();
    $request->suggestOperationIDsOpts->depthStyle = Shared\DepthStyle::Deep;
    $request->suggestOperationIDsOpts->style = Shared\Style::Standardize;
    $request->limit = 4536.53;
    $request->namespaceName = '<value>';
    $request->revisionReference = '<value>';
    $request->xSessionId = '<value>';;

    $response = $sdk->suggest->suggestOperationIDsRegistry($request);

    if ($response->suggestedOperationIDs !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                           | Type                                                                                                                                                | Required                                                                                                                                            | Description                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                          | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\SuggestOperationIDsRegistryRequest](../../Models/Operations/SuggestOperationIDsRegistryRequest.md) | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\SuggestOperationIDsRegistryResponse](../../Models/Operations/SuggestOperationIDsRegistryResponse.md)**

