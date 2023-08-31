# RunPluginResponse


## Fields

| Field                                                                                                        | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `boundedRequests`                                                                                            | array<[\Speakeasy\SpeakeasyClientSDK\Models\Shared\BoundedRequest](../../models/shared/BoundedRequest.md)>   | :heavy_minus_sign:                                                                                           | OK                                                                                                           |
| `contentType`                                                                                                | *string*                                                                                                     | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `error`                                                                                                      | [?\Speakeasy\SpeakeasyClientSDK\Models\Shared\Error](../../models/shared/Error.md)                           | :heavy_minus_sign:                                                                                           | Default error response                                                                                       |
| `statusCode`                                                                                                 | *int*                                                                                                        | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `rawResponse`                                                                                                | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface) | :heavy_minus_sign:                                                                                           | N/A                                                                                                          |