# ListSubscriptionsRequest


## Fields

| Field                                                               | Type                                                                | Required                                                            | Description                                                         |
| ------------------------------------------------------------------- | ------------------------------------------------------------------- | ------------------------------------------------------------------- | ------------------------------------------------------------------- |
| `workspaceId`                                                       | *string*                                                            | :heavy_check_mark:                                                  | The workspace ID                                                    |
| `eventType`                                                         | *?string*                                                           | :heavy_minus_sign:                                                  | The event type                                                      |
| `namespaceName`                                                     | *?string*                                                           | :heavy_minus_sign:                                                  | The namespace name                                                  |
| `subscriptionType`                                                  | [?Shared\SubscriptionType](../../Models/Shared/SubscriptionType.md) | :heavy_minus_sign:                                                  | The subscription type                                               |
| `tag`                                                               | *?string*                                                           | :heavy_minus_sign:                                                  | The tag                                                             |