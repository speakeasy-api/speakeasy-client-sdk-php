<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class GetSchemasRequest
{
    /**
     * The ID of the Api to retrieve schemas for.
     *
     * @var string $apiID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=apiID')]
    public string $apiID;

    /**
     * The version ID of the Api to delete metadata for.
     *
     * @var string $versionID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=versionID')]
    public string $versionID;

    /**
     * @param  ?string  $apiID
     * @param  ?string  $versionID
     */
    public function __construct(?string $apiID = null, ?string $versionID = null)
    {
        $this->apiID = $apiID;
        $this->versionID = $versionID;
    }
}