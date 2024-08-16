# OrganizationUsageResponse

A billing summary of organization usage


## Fields

| Field                                                                       | Type                                                                        | Required                                                                    | Description                                                                 |
| --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- |
| `allowedLanguages`                                                          | array<*string*>                                                             | :heavy_check_mark:                                                          | List of allowed languages                                                   |
| `totalAllowedLanguages`                                                     | *int*                                                                       | :heavy_check_mark:                                                          | Total number of allowed languages, -1 if unlimited                          |
| `usage`                                                                     | array<[Shared\OrganizationUsage](../../Models/Shared/OrganizationUsage.md)> | :heavy_check_mark:                                                          | N/A                                                                         |
| `freeTrialExpiry`                                                           | [\DateTime](https://www.php.net/manual/en/class.datetime.php)               | :heavy_minus_sign:                                                          | Expiry date of the free trial, will be null if no trial                     |