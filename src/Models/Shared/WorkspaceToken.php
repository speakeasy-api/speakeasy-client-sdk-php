<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** WorkspaceToken - A workspace token */
class WorkspaceToken
{
    /**
     *
     * @var string $alg
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('alg')]
    public string $alg;

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
     * @var string $key
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('key')]
    public string $key;

    /**
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     *
     * @var string $workspaceId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('workspace_id')]
    public string $workspaceId;

    /**
     *
     * @var ?string $createdBy
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_by')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $createdBy = null;

    /**
     *
     * @var ?string $createdByName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_by_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $createdByName = null;

    /**
     *
     * @var ?string $createdByPhotoUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_by_photo_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $createdByPhotoUrl = null;

    /**
     *
     * @var ?string $email
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $email = null;

    /**
     *
     * @var ?\DateTime $lastUsed
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('last_used')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $lastUsed = null;

    /**
     * @param  string  $alg
     * @param  \DateTime  $createdAt
     * @param  string  $id
     * @param  string  $key
     * @param  string  $name
     * @param  string  $workspaceId
     * @param  ?string  $createdBy
     * @param  ?string  $createdByName
     * @param  ?string  $createdByPhotoUrl
     * @param  ?string  $email
     * @param  ?\DateTime  $lastUsed
     * @phpstan-pure
     */
    public function __construct(string $alg, \DateTime $createdAt, string $id, string $key, string $name, string $workspaceId, ?string $createdBy = null, ?string $createdByName = null, ?string $createdByPhotoUrl = null, ?string $email = null, ?\DateTime $lastUsed = null)
    {
        $this->alg = $alg;
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->key = $key;
        $this->name = $name;
        $this->workspaceId = $workspaceId;
        $this->createdBy = $createdBy;
        $this->createdByName = $createdByName;
        $this->createdByPhotoUrl = $createdByPhotoUrl;
        $this->email = $email;
        $this->lastUsed = $lastUsed;
    }
}