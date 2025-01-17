# GetCodeSamplesRequest


## Fields

| Field                                                    | Type                                                     | Required                                                 | Description                                              | Example                                                  |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| `registryUrl`                                            | *string*                                                 | :heavy_check_mark:                                       | The registry URL from which to retrieve the snippets.    | https://spec.speakeasy.com/my-org/my-workspace/my-source |
| `languages`                                              | array<*string*>                                          | :heavy_minus_sign:                                       | The languages to retrieve snippets for.                  |                                                          |
| `operationIds`                                           | array<*string*>                                          | :heavy_minus_sign:                                       | The operation IDs to retrieve snippets for.              | getPetById                                               |