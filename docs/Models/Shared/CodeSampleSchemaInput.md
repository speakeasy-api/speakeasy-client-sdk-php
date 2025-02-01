# CodeSampleSchemaInput


## Fields

| Field                                                  | Type                                                   | Required                                               | Description                                            |
| ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ |
| `language`                                             | *string*                                               | :heavy_check_mark:                                     | The language to generate code samples for              |
| `schemaFile`                                           | [Shared\SchemaFile](../../Models/Shared/SchemaFile.md) | :heavy_check_mark:                                     | The OpenAPI file to be uploaded                        |
| `operationIds`                                         | array<*string*>                                        | :heavy_minus_sign:                                     | A list of operations IDs to generate code samples for  |
| `packageName`                                          | *?string*                                              | :heavy_minus_sign:                                     | The name of the package                                |
| `sdkClassName`                                         | *?string*                                              | :heavy_minus_sign:                                     | The SDK class name                                     |