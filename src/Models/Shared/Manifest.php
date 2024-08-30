<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** Manifest - Returns the requested manifest file */
class Manifest
{
    /**
     * Annotations
     *
     * @var ?Annotations $annotations
     */
    #[\JMS\Serializer\Annotation\SerializedName('annotations')]
    #[\JMS\Serializer\Annotation\Type('\Speakeasy\SpeakeasyClientSDK\Models\Shared\Annotations|null')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Annotations $annotations = null;

    /**
     * Type of artifact
     *
     * @var ?string $artifactType
     */
    #[\JMS\Serializer\Annotation\SerializedName('artifactType')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $artifactType = null;

    /**
     * List of V2 image layer information
     *
     * @var ?array<V2Descriptor> $layers
     */
    #[\JMS\Serializer\Annotation\SerializedName('layers')]
    #[\JMS\Serializer\Annotation\Type('array<\Speakeasy\SpeakeasyClientSDK\Models\Shared\V2Descriptor>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $layers = null;

    /**
     * Media type usually application/vnd.docker.distribution.manifest.v2+json if this is in the accept header
     *
     * @var ?string $mediaType
     */
    #[\JMS\Serializer\Annotation\SerializedName('mediaType')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $mediaType = null;

    /**
     * Schema version
     *
     * @var ?int $schemaVersion
     */
    #[\JMS\Serializer\Annotation\SerializedName('schemaVersion')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $schemaVersion = null;

    /**
     * @param  ?Annotations  $annotations
     * @param  ?string  $artifactType
     * @param  ?array<V2Descriptor>  $layers
     * @param  ?string  $mediaType
     * @param  ?int  $schemaVersion
     */
    public function __construct(?Annotations $annotations = null, ?string $artifactType = null, ?array $layers = null, ?string $mediaType = null, ?int $schemaVersion = null)
    {
        $this->annotations = $annotations;
        $this->artifactType = $artifactType;
        $this->layers = $layers;
        $this->mediaType = $mediaType;
        $this->schemaVersion = $schemaVersion;
    }
}