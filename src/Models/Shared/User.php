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
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $admin;

    /**
     * Indicates whether the user has been confirmed.
     *
     * @var bool $confirmed
     */
    #[\JMS\Serializer\Annotation\SerializedName('confirmed')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $confirmed;

    /**
     * Timestamp of the user's creation.
     *
     * @var \DateTime $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;

    /**
     * Identifier of the default workspace.
     *
     * @var ?string $defaultWorkspaceId
     */
    #[\JMS\Serializer\Annotation\SerializedName('default_workspace_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $defaultWorkspaceId = null;

    /**
     * Display name of the user.
     *
     * @var string $displayName
     */
    #[\JMS\Serializer\Annotation\SerializedName('display_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $displayName;

    /**
     * Email address of the user.
     *
     * @var string $email
     */
    #[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $email;

    /**
     * Indicates whether the email address has been verified.
     *
     * @var bool $emailVerified
     */
    #[\JMS\Serializer\Annotation\SerializedName('email_verified')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $emailVerified;

    /**
     * GitHub handle of the user.
     *
     * @var ?string $githubHandle
     */
    #[\JMS\Serializer\Annotation\SerializedName('github_handle')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $githubHandle = null;

    /**
     * Unique identifier for the user.
     *
     * @var string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;

    /**
     * Timestamp of the last login.
     *
     * @var \DateTime $lastLoginAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('last_login_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $lastLoginAt;

    /**
     * URL of the user's photo.
     *
     * @var ?string $photoUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('photo_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $photoUrl = null;

    /**
     * Timestamp of the user's last update.
     *
     * @var \DateTime $updatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $updatedAt;

    /**
     * Indicates whether the user has been whitelisted.
     *
     * @var bool $whitelisted
     */
    #[\JMS\Serializer\Annotation\SerializedName('whitelisted')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $whitelisted;

    public function __construct()
    {
        $this->admin = false;
        $this->confirmed = false;
        $this->createdAt = new \DateTime();
        $this->defaultWorkspaceId = null;
        $this->displayName = '';
        $this->email = '';
        $this->emailVerified = false;
        $this->githubHandle = null;
        $this->id = '';
        $this->lastLoginAt = new \DateTime();
        $this->photoUrl = null;
        $this->updatedAt = new \DateTime();
        $this->whitelisted = false;
    }
}