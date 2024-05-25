# Suggest


## Overview

REST APIs for managing LLM OAS suggestions

### Available Operations

* [suggestOperationIDs](#suggestoperationids) - Generate operation ID suggestions.

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
        $request = new Operations\SuggestOperationIDsRequestBody();
    $request->opts = new Operations\Opts();
    $request->opts->depthStyle = Operations\DepthStyle::Nested;
    $request->opts->style = Operations\Style::Standardize;
    $request->schema = new Operations\Schema();
    $request->schema->content = '0xde88c98abc';
    $request->schema->fileName = 'your_file_here';;

    $response = $sdk->suggest->suggestOperationIDs($request);

    if ($response->suggestion !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\SuggestOperationIDsRequestBody](../../Models/Operations/SuggestOperationIDsRequestBody.md) | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\SuggestOperationIDsResponse](../../Models/Operations/SuggestOperationIDsResponse.md)**

