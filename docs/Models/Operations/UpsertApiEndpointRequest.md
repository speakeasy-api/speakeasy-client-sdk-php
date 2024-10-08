# UpsertApiEndpointRequest


## Fields

| Field                                                              | Type                                                               | Required                                                           | Description                                                        |
| ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ |
| `apiEndpoint`                                                      | [Shared\ApiEndpointInput](../../Models/Shared/ApiEndpointInput.md) | :heavy_check_mark:                                                 | A JSON representation of the ApiEndpoint to upsert.                |
| `apiEndpointID`                                                    | *string*                                                           | :heavy_check_mark:                                                 | The ID of the ApiEndpoint to upsert.                               |
| `apiID`                                                            | *string*                                                           | :heavy_check_mark:                                                 | The ID of the Api the ApiEndpoint belongs to.                      |
| `versionID`                                                        | *string*                                                           | :heavy_check_mark:                                                 | The version ID of the Api the ApiEndpoint belongs to.              |