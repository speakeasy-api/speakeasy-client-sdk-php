<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Models\Shared;
use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class InsertVersionMetadataRequest
{
    /**
     * A JSON representation of the metadata to insert.
     *
     * @var Shared\VersionMetadataInput $versionMetadata
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Shared\VersionMetadataInput $versionMetadata;

    /**
     * The ID of the Api to insert metadata for.
     *
     * @var string $apiID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=apiID')]
    public string $apiID;

    /**
     * The version ID of the Api to insert metadata for.
     *
     * @var string $versionID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=versionID')]
    public string $versionID;

    /**
     * @param  ?Shared\VersionMetadataInput  $versionMetadata
     * @param  ?string  $apiID
     * @param  ?string  $versionID
     */
    public function __construct(?Shared\VersionMetadataInput $versionMetadata = null, ?string $apiID = null, ?string $versionID = null)
    {
        $this->versionMetadata = $versionMetadata;
        $this->apiID = $apiID;
        $this->versionID = $versionID;
    }
}