# Revision


## Fields

| Field                                                                   | Type                                                                    | Required                                                                | Description                                                             | Example                                                                 |
| ----------------------------------------------------------------------- | ----------------------------------------------------------------------- | ----------------------------------------------------------------------- | ----------------------------------------------------------------------- | ----------------------------------------------------------------------- |
| `createdAt`                                                             | [\DateTime](https://www.php.net/manual/en/class.datetime.php)           | :heavy_check_mark:                                                      | N/A                                                                     |                                                                         |
| `digest`                                                                | *string*                                                                | :heavy_check_mark:                                                      | N/A                                                                     | sha256:6d1ef012b5674ad8a127ecfa9b5e6f5178d171b90ee462846974177fd9bdd39f |
| `id`                                                                    | *string*                                                                | :heavy_check_mark:                                                      | Format {namespace_id}/{revision_digest}                                 |                                                                         |
| `namespaceName`                                                         | *string*                                                                | :heavy_check_mark:                                                      | N/A                                                                     |                                                                         |
| `tags`                                                                  | array<*string*>                                                         | :heavy_check_mark:                                                      | N/A                                                                     |                                                                         |
| `updatedAt`                                                             | [\DateTime](https://www.php.net/manual/en/class.datetime.php)           | :heavy_check_mark:                                                      | N/A                                                                     |                                                                         |