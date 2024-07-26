<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
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
    #[\JMS\Serializer\Annotation\SerializedName('meta_key')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $metaKey;

    /**
     * One of the values for this metadata.
     *
     * @var string $metaValue
     */
    #[\JMS\Serializer\Annotation\SerializedName('meta_value')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $metaValue;

    public function __construct()
    {
        $this->metaKey = '';
        $this->metaValue = '';
    }
}