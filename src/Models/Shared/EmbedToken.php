<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** EmbedToken - A representation of an embed token granted for working with Speakeasy components. */
class EmbedToken
{
    /**
     * Creation timestamp.
     *
     * @var \DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    public \DateTime $createdAt;

    /**
     * The ID of the user that created this token.
     *
     * @var string $createdBy
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_by')]
    public string $createdBy;

    /**
     * A detailed description of the EmbedToken.
     *
     * @var string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    public string $description;

    /**
     * The time this token expires.
     *
     * @var \DateTime $expiresAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('expires_at')]
    public \DateTime $expiresAt;

    /**
     * The filters applied to this token.
     *
     * @var string $filters
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('filters')]
    public string $filters;

    /**
     * The ID of this EmbedToken.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * The last time this token was used.
     *
     * @var ?\DateTime $lastUsed
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('last_used')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $lastUsed = null;

    /**
     * The time this token was revoked.
     *
     * @var ?\DateTime $revokedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('revoked_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $revokedAt = null;

    /**
     * The ID of the user that revoked this token.
     *
     * @var ?string $revokedBy
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('revoked_by')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $revokedBy = null;

    /**
     * The workspace ID this token belongs to.
     *
     * @var string $workspaceId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('workspace_id')]
    public string $workspaceId;

    /**
     * @param  \DateTime  $createdAt
     * @param  string  $createdBy
     * @param  string  $description
     * @param  \DateTime  $expiresAt
     * @param  string  $filters
     * @param  string  $id
     * @param  string  $workspaceId
     * @param  ?\DateTime  $lastUsed
     * @param  ?\DateTime  $revokedAt
     * @param  ?string  $revokedBy
     */
    public function __construct(\DateTime $createdAt, string $createdBy, string $description, \DateTime $expiresAt, string $filters, string $id, string $workspaceId, ?\DateTime $lastUsed = null, ?\DateTime $revokedAt = null, ?string $revokedBy = null)
    {
        $this->createdAt = $createdAt;
        $this->createdBy = $createdBy;
        $this->description = $description;
        $this->expiresAt = $expiresAt;
        $this->filters = $filters;
        $this->id = $id;
        $this->workspaceId = $workspaceId;
        $this->lastUsed = $lastUsed;
        $this->revokedAt = $revokedAt;
        $this->revokedBy = $revokedBy;
    }
}