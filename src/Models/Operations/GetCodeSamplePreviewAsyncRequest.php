<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class GetCodeSamplePreviewAsyncRequest
{
    /**
     * The ID of the job to check the status and retrieve results
     *
     * @var string $jobID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=jobID')]
    public string $jobID;

    /**
     * @param  string  $jobID
     * @phpstan-pure
     */
    public function __construct(string $jobID)
    {
        $this->jobID = $jobID;
    }
}