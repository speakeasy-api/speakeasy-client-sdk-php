# GetWorkspaceTargetsDeprecatedRequest


## Fields

| Field                                                                  | Type                                                                   | Required                                                               | Description                                                            |
| ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- |
| `afterLastEventCreatedAt`                                              | [\DateTime](https://www.php.net/manual/en/class.datetime.php)          | :heavy_minus_sign:                                                     | Filter to only return targets with events created after this timestamp |
| `workspaceId`                                                          | *?string*                                                              | :heavy_minus_sign:                                                     | Unique identifier of the workspace.                                    |