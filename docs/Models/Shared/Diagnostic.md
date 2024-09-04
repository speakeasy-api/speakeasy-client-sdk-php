# Diagnostic


## Fields

| Field                                 | Type                                  | Required                              | Description                           |
| ------------------------------------- | ------------------------------------- | ------------------------------------- | ------------------------------------- |
| `message`                             | *string*                              | :heavy_check_mark:                    | Message describing the issue          |
| `path`                                | array<*string*>                       | :heavy_check_mark:                    | Schema path to the issue              |
| `type`                                | *string*                              | :heavy_check_mark:                    | Issue type                            |
| `helpMessage`                         | *?string*                             | :heavy_minus_sign:                    | Help message for how to fix the issue |