# GetAllApiVersionsRequest


## Fields

| Field                                                                                | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `apiID`                                                                              | *string*                                                                             | :heavy_check_mark:                                                                   | The ID of the Api to retrieve.                                                       |
| `metadata`                                                                           | array<string, array<*string*>>                                                       | :heavy_minus_sign:                                                                   | Metadata to filter Apis on                                                           |
| `op`                                                                                 | [?\Speakeasy\SpeakeasyClientSDK\Models\Operations\Op](../../models/operations/Op.md) | :heavy_minus_sign:                                                                   | Configuration for filter operations                                                  |