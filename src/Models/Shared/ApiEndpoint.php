<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** ApiEndpoint - An ApiEndpoint is a description of an Endpoint for an API. */
class ApiEndpoint
{
    /**
     * The ID of this ApiEndpoint. This is a hash of the method and path.
     *
     * @var string $apiEndpointId
     */
    #[\JMS\Serializer\Annotation\SerializedName('api_endpoint_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $apiEndpointId;

    /**
     * The ID of the Api this ApiEndpoint belongs to.
     *
     * @var string $apiId
     */
    #[\JMS\Serializer\Annotation\SerializedName('api_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $apiId;

    /**
     * Creation timestamp.
     *
     * @var \DateTime $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;

    /**
     * A detailed description of the ApiEndpoint.
     *
     * @var string $description
     */
    #[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $description;

    /**
     * A human-readable name for the ApiEndpoint.
     *
     * @var string $displayName
     */
    #[\JMS\Serializer\Annotation\SerializedName('display_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $displayName;

    /**
     * Determines if the endpoint was found in the OpenAPI spec associated with the parent Api.
     *
     * @var ?bool $matched
     */
    #[\JMS\Serializer\Annotation\SerializedName('matched')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $matched = null;

    /**
     * HTTP verb.
     *
     * @var string $method
     */
    #[\JMS\Serializer\Annotation\SerializedName('method')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $method;

    /**
     * Path that handles this Api.
     *
     * @var string $path
     */
    #[\JMS\Serializer\Annotation\SerializedName('path')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $path;

    /**
     * Last update timestamp.
     *
     * @var \DateTime $updatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $updatedAt;

    /**
     * The version ID of the Api this ApiEndpoint belongs to.
     *
     * @var string $versionId
     */
    #[\JMS\Serializer\Annotation\SerializedName('version_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $versionId;

    /**
     * The workspace ID this ApiEndpoint belongs to.
     *
     * @var string $workspaceId
     */
    #[\JMS\Serializer\Annotation\SerializedName('workspace_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $workspaceId;

    public function __construct()
    {
        $this->apiEndpointId = '';
        $this->apiId = '';
        $this->createdAt = new \DateTime();
        $this->description = '';
        $this->displayName = '';
        $this->matched = null;
        $this->method = '';
        $this->path = '';
        $this->updatedAt = new \DateTime();
        $this->versionId = '';
        $this->workspaceId = '';
    }
}