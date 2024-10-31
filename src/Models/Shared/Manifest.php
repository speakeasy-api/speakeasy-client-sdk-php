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
    #[\Speakeasy\Serializer\Annotation\SerializedName('annotations')]
    #[\Speakeasy\Serializer\Annotation\Type('\Speakeasy\SpeakeasyClientSDK\Models\Shared\Annotations|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Annotations $annotations = null;

    /**
     * Type of artifact
     *
     * @var ?string $artifactType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('artifactType')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $artifactType = null;

    /**
     * List of V2 image layer information
     *
     * @var ?array<V2Descriptor> $layers
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('layers')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Speakeasy\SpeakeasyClientSDK\Models\Shared\V2Descriptor>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $layers = null;

    /**
     * Media type usually application/vnd.docker.distribution.manifest.v2+json if this is in the accept header
     *
     * @var ?string $mediaType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('mediaType')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $mediaType = null;

    /**
     * Schema version
     *
     * @var ?int $schemaVersion
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('schemaVersion')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
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