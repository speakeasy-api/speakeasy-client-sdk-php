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
    #[\JMS\Serializer\Annotation\SerializedName('admin')]
    public bool $admin;

    /**
     * Indicates whether the user has been confirmed.
     *
     * @var bool $confirmed
     */
    #[\JMS\Serializer\Annotation\SerializedName('confirmed')]
    public bool $confirmed;

    /**
     * Timestamp of the user's creation.
     *
     * @var \DateTime $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    public \DateTime $createdAt;

    /**
     * Identifier of the default workspace.
     *
     * @var ?string $defaultWorkspaceId
     */
    #[\JMS\Serializer\Annotation\SerializedName('default_workspace_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $defaultWorkspaceId = null;

    /**
     * Display name of the user.
     *
     * @var string $displayName
     */
    #[\JMS\Serializer\Annotation\SerializedName('display_name')]
    public string $displayName;

    /**
     * Email address of the user.
     *
     * @var string $email
     */
    #[\JMS\Serializer\Annotation\SerializedName('email')]
    public string $email;

    /**
     * Indicates whether the email address has been verified.
     *
     * @var bool $emailVerified
     */
    #[\JMS\Serializer\Annotation\SerializedName('email_verified')]
    public bool $emailVerified;

    /**
     * GitHub handle of the user.
     *
     * @var ?string $githubHandle
     */
    #[\JMS\Serializer\Annotation\SerializedName('github_handle')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $githubHandle = null;

    /**
     * Unique identifier for the user.
     *
     * @var string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * Timestamp of the last login.
     *
     * @var ?\DateTime $lastLoginAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('last_login_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $lastLoginAt = null;

    /**
     * URL of the user's photo.
     *
     * @var ?string $photoUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('photo_url')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $photoUrl = null;

    /**
     * Timestamp of the user's last update.
     *
     * @var \DateTime $updatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    public \DateTime $updatedAt;

    /**
     * Indicates whether the user has been whitelisted.
     *
     * @var bool $whitelisted
     */
    #[\JMS\Serializer\Annotation\SerializedName('whitelisted')]
    public bool $whitelisted;

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
     * @param  ?string  $defaultWorkspaceId
     * @param  ?string  $githubHandle
     * @param  ?\DateTime  $lastLoginAt
     * @param  ?string  $photoUrl
     */
    public function __construct(bool $admin, bool $confirmed, \DateTime $createdAt, string $displayName, string $email, bool $emailVerified, string $id, \DateTime $updatedAt, bool $whitelisted, ?string $defaultWorkspaceId = null, ?string $githubHandle = null, ?\DateTime $lastLoginAt = null, ?string $photoUrl = null)
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
        $this->defaultWorkspaceId = $defaultWorkspaceId;
        $this->githubHandle = $githubHandle;
        $this->lastLoginAt = $lastLoginAt;
        $this->photoUrl = $photoUrl;
    }
}