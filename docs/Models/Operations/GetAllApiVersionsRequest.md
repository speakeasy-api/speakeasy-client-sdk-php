# GetAllApiVersionsRequest


## Fields

| Field                                           | Type                                            | Required                                        | Description                                     |
| ----------------------------------------------- | ----------------------------------------------- | ----------------------------------------------- | ----------------------------------------------- |
| `apiID`                                         | *string*                                        | :heavy_check_mark:                              | The ID of the Api to retrieve.                  |
| `metadata`                                      | array<string, array<*string*>>                  | :heavy_minus_sign:                              | Metadata to filter Apis on                      |
| `op`                                            | [?Operations\Op](../../Models/Operations/Op.md) | :heavy_minus_sign:                              | Configuration for filter operations             |