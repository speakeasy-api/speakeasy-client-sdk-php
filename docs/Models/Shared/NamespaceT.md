# NamespaceT

A namespace contains many revisions.


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `createdAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | N/A                                                           |
| `id`                                                          | *string*                                                      | :heavy_check_mark:                                            | {organization_slug}/{workspace_slug}/{namespace_name}         |
| `name`                                                        | *string*                                                      | :heavy_check_mark:                                            | A human-readable name for the namespace.                      |
| `updatedAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | N/A                                                           |
| `public`                                                      | *?bool*                                                       | :heavy_minus_sign:                                            | N/A                                                           |