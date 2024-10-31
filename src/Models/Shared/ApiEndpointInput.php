<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** ApiEndpointInput - An ApiEndpoint is a description of an Endpoint for an API. */
class ApiEndpointInput
{
    /**
     * The ID of this ApiEndpoint. This is a hash of the method and path.
     *
     * @var string $apiEndpointId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('api_endpoint_id')]
    public string $apiEndpointId;

    /**
     * A detailed description of the ApiEndpoint.
     *
     * @var string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    public string $description;

    /**
     * A human-readable name for the ApiEndpoint.
     *
     * @var string $displayName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('display_name')]
    public string $displayName;

    /**
     * HTTP verb.
     *
     * @var string $method
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('method')]
    public string $method;

    /**
     * Path that handles this Api.
     *
     * @var string $path
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('path')]
    public string $path;

    /**
     * The version ID of the Api this ApiEndpoint belongs to.
     *
     * @var string $versionId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('version_id')]
    public string $versionId;

    /**
     * @param  string  $apiEndpointId
     * @param  string  $description
     * @param  string  $displayName
     * @param  string  $method
     * @param  string  $path
     * @param  string  $versionId
     */
    public function __construct(string $apiEndpointId, string $description, string $displayName, string $method, string $path, string $versionId)
    {
        $this->apiEndpointId = $apiEndpointId;
        $this->description = $description;
        $this->displayName = $displayName;
        $this->method = $method;
        $this->path = $path;
        $this->versionId = $versionId;
    }
}