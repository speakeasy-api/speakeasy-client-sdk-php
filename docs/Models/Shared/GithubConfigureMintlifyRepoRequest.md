# GithubConfigureMintlifyRepoRequest

A request to configure a GitHub repository for mintlify


## Fields

| Field                                    | Type                                     | Required                                 | Description                              |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| `input`                                  | *string*                                 | :heavy_check_mark:                       | The input OpenAPI document               |
| `org`                                    | *string*                                 | :heavy_check_mark:                       | The GitHub organization name             |
| `overlays`                               | array<*string*>                          | :heavy_check_mark:                       | The overlays to apply                    |
| `repo`                                   | *string*                                 | :heavy_check_mark:                       | The GitHub repository name               |
| `subdirectory`                           | *?string*                                | :heavy_minus_sign:                       | The subdirectory (location of mint.json) |