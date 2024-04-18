# Reports


## Overview

REST APIs for managing reports

### Available Operations

* [getChangesReportSignedUrl](#getchangesreportsignedurl) - Get the signed access url for the change reports for a particular document.
* [getLintingReportSignedUrl](#getlintingreportsignedurl) - Get the signed access url for the linting reports for a particular document.
* [uploadReport](#uploadreport) - Upload a report.

## getChangesReportSignedUrl

Get the signed access url for the change reports for a particular document.

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

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setWorkspaceID('<value>')
    ->setSecurity($security)->build();

try {
        $request = new Operations\GetChangesReportSignedUrlRequest();
    $request->documentChecksum = '<value>';;

    $response = $sdk->reports->getChangesReportSignedUrl($request);

    if ($response->signedAccess !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetChangesReportSignedUrlRequest](../../Models/Operations/GetChangesReportSignedUrlRequest.md) | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetChangesReportSignedUrlResponse](../../Models/Operations/GetChangesReportSignedUrlResponse.md)**


## getLintingReportSignedUrl

Get the signed access url for the linting reports for a particular document.

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

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setWorkspaceID('<value>')
    ->setSecurity($security)->build();

try {
        $request = new Operations\GetLintingReportSignedUrlRequest();
    $request->documentChecksum = '<value>';;

    $response = $sdk->reports->getLintingReportSignedUrl($request);

    if ($response->signedAccess !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetLintingReportSignedUrlRequest](../../Models/Operations/GetLintingReportSignedUrlRequest.md) | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetLintingReportSignedUrlResponse](../../Models/Operations/GetLintingReportSignedUrlResponse.md)**


## uploadReport

Upload a report.

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

$sdk = SpeakeasyClientSDK\SDK::builder()
    ->setWorkspaceID('<value>')
    ->setSecurity($security)->build();

try {
        $request = new Operations\UploadReportRequestBody();
    $request->data = new Shared\Report();
    $request->data->type = Shared\Type::Changes;
    $request->file = new Operations\File();
    $request->file->content = '0x329C0ad855';
    $request->file->fileName = 'causal.shtml';;

    $response = $sdk->reports->uploadReport($request);

    if ($response->uploadedReport !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Speakeasy\SpeakeasyClientSDK\Models\Operations\UploadReportRequestBody](../../Models/Operations/UploadReportRequestBody.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\Speakeasy\SpeakeasyClientSDK\Models\Operations\UploadReportResponse](../../Models/Operations/UploadReportResponse.md)**

