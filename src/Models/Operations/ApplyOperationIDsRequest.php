<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class ApplyOperationIDsRequest
{
    /**
     * Apply options
     *
     * @var ?\Speakeasy\SpeakeasyClientSDK\Models\Operations\ApplyOperationIDsRequestBody $requestBody
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?ApplyOperationIDsRequestBody $requestBody = null;

    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-session-id')]
    public string $xSessionId;

    public function __construct()
    {
        $this->requestBody = null;
        $this->xSessionId = '';
    }
}