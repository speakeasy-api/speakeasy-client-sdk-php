<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;


/** ApplyOperationIDsRequestBody - Apply options */
class ApplyOperationIDsRequestBody
{
    /**
     * Whether to apply the suggestions as an overlay or replace the existing operationIDs. Default: false
     *
     * @var ?bool $asOverlay
     */
    #[\JMS\Serializer\Annotation\SerializedName('as_overlay')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $asOverlay = null;

    public function __construct()
    {
        $this->asOverlay = null;
    }
}