<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** V2Descriptor - V2 descriptor */
class V2Descriptor
{
    /**
     * Annotations
     *
     * @var ?Annotations $annotations
     */
    #[\JMS\Serializer\Annotation\SerializedName('annotations')]
    #[\JMS\Serializer\Annotation\Type('\Speakeasy\SpeakeasyClientSDK\Models\Shared\Annotations|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?Annotations $annotations = null;

    /**
     * Digest
     *
     * @var ?string $digest
     */
    #[\JMS\Serializer\Annotation\SerializedName('digest')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $digest = null;

    /**
     * Media type
     *
     * @var ?string $mediaType
     */
    #[\JMS\Serializer\Annotation\SerializedName('mediaType')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $mediaType = null;

    /**
     * Size
     *
     * @var ?int $size
     */
    #[\JMS\Serializer\Annotation\SerializedName('size')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $size = null;

    /**
     * @param  ?Annotations  $annotations
     * @param  ?string  $digest
     * @param  ?string  $mediaType
     * @param  ?int  $size
     */
    public function __construct(?Annotations $annotations = null, ?string $digest = null, ?string $mediaType = null, ?int $size = null)
    {
        $this->annotations = $annotations;
        $this->digest = $digest;
        $this->mediaType = $mediaType;
        $this->size = $size;
    }
}