<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class FindApiEndpointRequest
{
    /**
     * The ID of the Api the ApiEndpoint belongs to.
     *
     * @var string $apiID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=apiID')]
    public string $apiID;

    /**
     * The displayName of the ApiEndpoint to find (set by operationId from OpenAPI schema).
     *
     * @var string $displayName
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=displayName')]
    public string $displayName;

    /**
     * The version ID of the Api the ApiEndpoint belongs to.
     *
     * @var string $versionID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=versionID')]
    public string $versionID;

    /**
     * @param  ?string  $apiID
     * @param  ?string  $displayName
     * @param  ?string  $versionID
     */
    public function __construct(?string $apiID = null, ?string $displayName = null, ?string $versionID = null)
    {
        $this->apiID = $apiID;
        $this->displayName = $displayName;
        $this->versionID = $versionID;
    }
}