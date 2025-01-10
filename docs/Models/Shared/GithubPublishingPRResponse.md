# GithubPublishingPRResponse

Open generation PRs pending publishing


## Fields

| Field                                                                     | Type                                                                      | Required                                                                  | Description                                                               |
| ------------------------------------------------------------------------- | ------------------------------------------------------------------------- | ------------------------------------------------------------------------- | ------------------------------------------------------------------------- |
| `pendingVersion`                                                          | *?string*                                                                 | :heavy_minus_sign:                                                        | N/A                                                                       |
| `pullRequest`                                                             | *?string*                                                                 | :heavy_minus_sign:                                                        | N/A                                                                       |
| `pullRequestMetadata`                                                     | [?Shared\PullRequestMetadata](../../Models/Shared/PullRequestMetadata.md) | :heavy_minus_sign:                                                        | This can only be populated when the github app is installed for a repo    |