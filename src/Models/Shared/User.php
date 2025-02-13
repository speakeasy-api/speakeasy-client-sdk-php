<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


class User
{
    /**
     * Indicates whether the user is an admin.
     *
     * @var bool $admin
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('admin')]
    public bool $admin;

    /**
     * Indicates whether the user has been confirmed.
     *
     * @var bool $confirmed
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('confirmed')]
    public bool $confirmed;

    /**
     * Timestamp of the user's creation.
     *
     * @var \DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    public \DateTime $createdAt;

    /**
     * Display name of the user.
     *
     * @var string $displayName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('display_name')]
    public string $displayName;

    /**
     * Email address of the user.
     *
     * @var string $email
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email')]
    public string $email;

    /**
     * Indicates whether the email address has been verified.
     *
     * @var bool $emailVerified
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email_verified')]
    public bool $emailVerified;

    /**
     * Unique identifier for the user.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * Timestamp of the user's last update.
     *
     * @var \DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    public \DateTime $updatedAt;

    /**
     * Indicates whether the user has been whitelisted.
     *
     * @var bool $whitelisted
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('whitelisted')]
    public bool $whitelisted;

    /**
     * Indicates whether the user has created an API key. Not always populated
     *
     * @var ?bool $hasCreatedApiKey
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('has_created_api_key')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $hasCreatedApiKey = null;

    /**
     * Indicates whether the user is internal.
     *
     * @var ?bool $internal
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('internal')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $internal = null;

    /**
     * Hash used for pylon identity verification returned on v1/user.
     *
     * @var ?string $pylonIdentityHash
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pylon_identity_hash')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $pylonIdentityHash = null;

    /**
     * Identifier of the default workspace.
     *
     * @var ?string $defaultWorkspaceId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('default_workspace_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $defaultWorkspaceId = null;

    /**
     * GitHub handle of the user.
     *
     * @var ?string $githubHandle
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('github_handle')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $githubHandle = null;

    /**
     * Timestamp of the last login.
     *
     * @var ?\DateTime $lastLoginAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('last_login_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $lastLoginAt = null;

    /**
     * URL of the user's photo.
     *
     * @var ?string $photoUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('photo_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $photoUrl = null;

    /**
     * @param  bool  $admin
     * @param  bool  $confirmed
     * @param  \DateTime  $createdAt
     * @param  string  $displayName
     * @param  string  $email
     * @param  bool  $emailVerified
     * @param  string  $id
     * @param  \DateTime  $updatedAt
     * @param  bool  $whitelisted
     * @param  ?bool  $hasCreatedApiKey
     * @param  ?bool  $internal
     * @param  ?string  $pylonIdentityHash
     * @param  ?string  $defaultWorkspaceId
     * @param  ?string  $githubHandle
     * @param  ?\DateTime  $lastLoginAt
     * @param  ?string  $photoUrl
     * @phpstan-pure
     */
    public function __construct(bool $admin, bool $confirmed, \DateTime $createdAt, string $displayName, string $email, bool $emailVerified, string $id, \DateTime $updatedAt, bool $whitelisted, ?bool $hasCreatedApiKey = null, ?bool $internal = null, ?string $pylonIdentityHash = null, ?string $defaultWorkspaceId = null, ?string $githubHandle = null, ?\DateTime $lastLoginAt = null, ?string $photoUrl = null)
    {
        $this->admin = $admin;
        $this->confirmed = $confirmed;
        $this->createdAt = $createdAt;
        $this->displayName = $displayName;
        $this->email = $email;
        $this->emailVerified = $emailVerified;
        $this->id = $id;
        $this->updatedAt = $updatedAt;
        $this->whitelisted = $whitelisted;
        $this->hasCreatedApiKey = $hasCreatedApiKey;
        $this->internal = $internal;
        $this->pylonIdentityHash = $pylonIdentityHash;
        $this->defaultWorkspaceId = $defaultWorkspaceId;
        $this->githubHandle = $githubHandle;
        $this->lastLoginAt = $lastLoginAt;
        $this->photoUrl = $photoUrl;
    }
}