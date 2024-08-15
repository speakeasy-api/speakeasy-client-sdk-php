<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** Api - An Api is representation of a API (a collection of API Endpoints) within the Speakeasy Platform. */
class Api
{
    /**
     * The ID of this Api. This is a human-readable name (subject to change).
     *
     * @var string $apiId
     */
    #[\JMS\Serializer\Annotation\SerializedName('api_id')]
    public string $apiId;

    /**
     * Creation timestamp.
     *
     * @var \DateTime $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    public \DateTime $createdAt;

    /**
     * A detailed description of the Api.
     *
     * @var string $description
     */
    #[\JMS\Serializer\Annotation\SerializedName('description')]
    public string $description;

    /**
     * Determines if all the endpoints within the Api are found in the OpenAPI spec associated with the Api.
     *
     * @var ?bool $matched
     */
    #[\JMS\Serializer\Annotation\SerializedName('matched')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $matched = null;

    /**
     * A set of values associated with a meta_data key. This field is only set on get requests.
     *
     * @var ?array<string, array<string>> $metaData
     */
    #[\JMS\Serializer\Annotation\SerializedName('meta_data')]
    #[\JMS\Serializer\Annotation\Type('array<string, array<string>>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $metaData = null;

    /**
     * Last update timestamp.
     *
     * @var \DateTime $updatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    public \DateTime $updatedAt;

    /**
     * The version ID of this Api. This is semantic version identifier.
     *
     * @var string $versionId
     */
    #[\JMS\Serializer\Annotation\SerializedName('version_id')]
    public string $versionId;

    /**
     * The workspace ID this Api belongs to.
     *
     * @var string $workspaceId
     */
    #[\JMS\Serializer\Annotation\SerializedName('workspace_id')]
    public string $workspaceId;

    /**
     * @param  ?string  $apiId
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $description
     * @param  ?\DateTime  $updatedAt
     * @param  ?string  $versionId
     * @param  ?string  $workspaceId
     * @param  ?bool  $matched
     * @param  ?array<string, array<string>>  $metaData
     */
    public function __construct(?string $apiId = null, ?\DateTime $createdAt = null, ?string $description = null, ?\DateTime $updatedAt = null, ?string $versionId = null, ?string $workspaceId = null, ?bool $matched = null, ?array $metaData = null)
    {
        $this->apiId = $apiId;
        $this->createdAt = $createdAt;
        $this->description = $description;
        $this->updatedAt = $updatedAt;
        $this->versionId = $versionId;
        $this->workspaceId = $workspaceId;
        $this->matched = $matched;
        $this->metaData = $metaData;
    }
}