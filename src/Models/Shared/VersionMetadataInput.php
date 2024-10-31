<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** VersionMetadataInput - A set of keys and associated values, attached to a particular version of an Api. */
class VersionMetadataInput
{
    /**
     * The key for this metadata.
     *
     * @var string $metaKey
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('meta_key')]
    public string $metaKey;

    /**
     * One of the values for this metadata.
     *
     * @var string $metaValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('meta_value')]
    public string $metaValue;

    /**
     * @param  string  $metaKey
     * @param  string  $metaValue
     */
    public function __construct(string $metaKey, string $metaValue)
    {
        $this->metaKey = $metaKey;
        $this->metaValue = $metaValue;
    }
}