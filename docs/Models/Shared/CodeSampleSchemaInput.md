# CodeSampleSchemaInput


## Fields

| Field                                                  | Type                                                   | Required                                               | Description                                            |
| ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ |
| `languages`                                            | array<*string*>                                        | :heavy_check_mark:                                     | A list of languages to generate code samples for       |
| `schemaFile`                                           | [Shared\SchemaFile](../../Models/Shared/SchemaFile.md) | :heavy_check_mark:                                     | The OpenAPI file to be uploaded                        |
| `packageName`                                          | *?string*                                              | :heavy_minus_sign:                                     | The name of the package                                |
| `sdkClassName`                                         | *?string*                                              | :heavy_minus_sign:                                     | The SDK class name                                     |