<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class GenerateOpenApiSpecForApiEndpointRequest
{
    /**
     * The ID of the ApiEndpoint to generate an OpenAPI specification for.
     *
     * @var string $apiEndpointID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=apiEndpointID')]
    public string $apiEndpointID;

    /**
     * The ID of the Api to generate an OpenAPI specification for.
     *
     * @var string $apiID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=apiID')]
    public string $apiID;

    /**
     * The version ID of the Api to generate an OpenAPI specification for.
     *
     * @var string $versionID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=versionID')]
    public string $versionID;

    /**
     * @param  string  $apiEndpointID
     * @param  string  $apiID
     * @param  string  $versionID
     */
    public function __construct(string $apiEndpointID, string $apiID, string $versionID)
    {
        $this->apiEndpointID = $apiEndpointID;
        $this->apiID = $apiID;
        $this->versionID = $versionID;
    }
}