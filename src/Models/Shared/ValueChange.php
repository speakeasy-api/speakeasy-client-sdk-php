<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


class ValueChange
{
    /**
     * Represents the previous value of the element.
     *
     * @var string $from
     */
    #[\JMS\Serializer\Annotation\SerializedName('From')]
    public string $from;

    /**
     * Represents the current value of the element.
     *
     * @var string $to
     */
    #[\JMS\Serializer\Annotation\SerializedName('To')]
    public string $to;

    /**
     * @param  ?string  $from
     * @param  ?string  $to
     */
    public function __construct(?string $from = null, ?string $to = null)
    {
        $this->from = $from;
        $this->to = $to;
    }
}