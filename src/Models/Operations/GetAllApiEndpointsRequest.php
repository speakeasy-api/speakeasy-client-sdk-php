<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class GetAllApiEndpointsRequest
{
    /**
     * The ID of the Api to retrieve ApiEndpoints for.
     *
     * @var string $apiID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=apiID')]
    public string $apiID;

    /**
     * @param  string  $apiID
     */
    public function __construct(string $apiID)
    {
        $this->apiID = $apiID;
    }
}