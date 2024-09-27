# GetWorkspaceTargetsDeprecatedRequest


## Fields

| Field                                                                  | Type                                                                   | Required                                                               | Description                                                            |
| ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- |
| `workspaceId`                                                          | *string*                                                               | :heavy_check_mark:                                                     | Unique identifier of the workspace.                                    |
| `afterLastEventCreatedAt`                                              | [\DateTime](https://www.php.net/manual/en/class.datetime.php)          | :heavy_minus_sign:                                                     | Filter to only return targets with events created after this timestamp |