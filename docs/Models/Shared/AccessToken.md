# AccessToken

An AccessToken is a token that can be used to authenticate with the Speakeasy API.


## Fields

| Field                                                            | Type                                                             | Required                                                         | Description                                                      |
| ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- |
| `accessToken`                                                    | *string*                                                         | :heavy_check_mark:                                               | N/A                                                              |
| `claims`                                                         | [Shared\Claims](../../Models/Shared/Claims.md)                   | :heavy_check_mark:                                               | N/A                                                              |
| `featureFlags`                                                   | array<[Shared\FeatureFlag](../../Models/Shared/FeatureFlag.md)>  | :heavy_minus_sign:                                               | N/A                                                              |
| `user`                                                           | [Shared\AccessTokenUser](../../Models/Shared/AccessTokenUser.md) | :heavy_check_mark:                                               | N/A                                                              |
| `workspaces`                                                     | array<[Shared\Workspaces](../../Models/Shared/Workspaces.md)>    | :heavy_minus_sign:                                               | N/A                                                              |