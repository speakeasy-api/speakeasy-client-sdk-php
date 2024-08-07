<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class RegisterSchemaRequest
{
    /**
     * The schema file to upload provided as a multipart/form-data file segment.
     *
     * @var \Speakeasy\SpeakeasyClientSDK\Models\Operations\RegisterSchemaRequestBody $requestBody
     */
    #[SpeakeasyMetadata('request:mediaType=multipart/form-data')]
    public RegisterSchemaRequestBody $requestBody;

    /**
     * The ID of the Api to get the schema for.
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

    public function __construct()
    {
        $this->requestBody = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\RegisterSchemaRequestBody();
        $this->apiID = '';
        $this->versionID = '';
    }
}