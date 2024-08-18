<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


class Report
{
    /**
     *
     * @var ?Type $type
     */
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('\Speakeasy\SpeakeasyClientSDK\Models\Shared\Type')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Type $type = null;

    /**
     * @param  ?Type  $type
     */
    public function __construct(?Type $type = null)
    {
        $this->type = $type;
    }
}