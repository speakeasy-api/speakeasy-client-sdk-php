# PullRequestMetadata

This can only be populated when the github app is installed for a repo


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `baseBranch`                                                  | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |
| `canMerge`                                                    | *?bool*                                                       | :heavy_minus_sign:                                            | N/A                                                           |
| `createdAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | N/A                                                           |
| `description`                                                 | *?string*                                                     | :heavy_minus_sign:                                            | truncated to first 1000 characters                            |
| `headBranch`                                                  | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |
| `labels`                                                      | array<*string*>                                               | :heavy_minus_sign:                                            | List of github labels                                         |
| `requestedReviewers`                                          | array<*string*>                                               | :heavy_minus_sign:                                            | List of github handles                                        |
| `status`                                                      | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |
| `title`                                                       | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |