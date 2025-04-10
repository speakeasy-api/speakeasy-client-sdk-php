<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** PublishingToken - A token used to publish to a target */
class PublishingToken
{
    /**
     *
     * @var \DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    public \DateTime $createdAt;

    /**
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var string $targetId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('target_id')]
    public string $targetId;

    /**
     *
     * @var string $targetResource
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('target_resource')]
    public string $targetResource;

    /**
     *
     * @var string $token
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('token')]
    public string $token;

    /**
     *
     * @var ?string $createdBy
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_by')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $createdBy = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     *
     * @var ?string $updatedBy
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_by')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $updatedBy = null;

    /**
     *
     * @var ?\DateTime $validUntil
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('valid_until')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $validUntil = null;

    /**
     * @param  \DateTime  $createdAt
     * @param  string  $id
     * @param  string  $targetId
     * @param  string  $targetResource
     * @param  string  $token
     * @param  ?string  $createdBy
     * @param  ?\DateTime  $updatedAt
     * @param  ?string  $updatedBy
     * @param  ?\DateTime  $validUntil
     * @phpstan-pure
     */
    public function __construct(\DateTime $createdAt, string $id, string $targetId, string $targetResource, string $token, ?string $createdBy = null, ?\DateTime $updatedAt = null, ?string $updatedBy = null, ?\DateTime $validUntil = null)
    {
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->targetId = $targetId;
        $this->targetResource = $targetResource;
        $this->token = $token;
        $this->createdBy = $createdBy;
        $this->updatedAt = $updatedAt;
        $this->updatedBy = $updatedBy;
        $this->validUntil = $validUntil;
    }
}