# SearchWorkspaceEventsRequest


## Fields

| Field                                                             | Type                                                              | Required                                                          | Description                                                       |
| ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- |
| `executionId`                                                     | *?string*                                                         | :heavy_minus_sign:                                                | Shared execution ID for cli events across a single action.        |
| `generateGenLockId`                                               | *?string*                                                         | :heavy_minus_sign:                                                | A specific gen lock ID for the events.                            |
| `interactionType`                                                 | [?Shared\InteractionType](../../Models/Shared/InteractionType.md) | :heavy_minus_sign:                                                | Specified interaction type for events.                            |
| `lintReportDigest`                                                | *?string*                                                         | :heavy_minus_sign:                                                | Unique identifier of the lint report digest.                      |
| `openapiDiffReportDigest`                                         | *?string*                                                         | :heavy_minus_sign:                                                | Unique identifier of the openapi diff report digest.              |
| `sourceRevisionDigest`                                            | *?string*                                                         | :heavy_minus_sign:                                                | Unique identifier of the source revision digest.                  |
| `workspaceId`                                                     | *?string*                                                         | :heavy_minus_sign:                                                | Unique identifier of the workspace.                               |