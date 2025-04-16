# UpdatePublishingTokenExpirationRequestBody

The publishing token to update


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `tokenName`                                                   | *?string*                                                     | :heavy_minus_sign:                                            | The new name for the publishing token.                        |
| `validUntil`                                                  | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | The new expiration date for the publishing token.             |