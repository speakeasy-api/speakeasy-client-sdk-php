# GenerateCodeSamplePreviewAsyncResponseBody

Job accepted, returns a job ID to poll for status and result


## Fields

| Field                                                                      | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `jobId`                                                                    | *string*                                                                   | :heavy_check_mark:                                                         | The job ID for polling                                                     |
| `status`                                                                   | [Shared\CodeSamplesJobStatus](../../Models/Shared/CodeSamplesJobStatus.md) | :heavy_check_mark:                                                         | The current status of the job. Possible values are `pending` or `running`. |