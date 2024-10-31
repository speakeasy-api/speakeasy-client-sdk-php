<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


class License
{
    /**
     *
     * @var ?string $identifier
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('identifier')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $identifier = null;

    /**
     * @param  ?string  $identifier
     */
    public function __construct(?string $identifier = null)
    {
        $this->identifier = $identifier;
    }
}