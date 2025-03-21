<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


class AccessTokenUser
{
    /**
     *
     * @var ?bool $admin
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('admin')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $admin = null;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     *
     * @var ?string $displayName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('display_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $displayName = null;

    /**
     *
     * @var ?string $email
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $email = null;

    /**
     *
     * @var ?bool $emailVerified
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email_verified')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $emailVerified = null;

    /**
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * @param  ?bool  $admin
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $displayName
     * @param  ?string  $email
     * @param  ?bool  $emailVerified
     * @param  ?string  $id
     * @phpstan-pure
     */
    public function __construct(?bool $admin = null, ?\DateTime $createdAt = null, ?string $displayName = null, ?string $email = null, ?bool $emailVerified = null, ?string $id = null)
    {
        $this->admin = $admin;
        $this->createdAt = $createdAt;
        $this->displayName = $displayName;
        $this->email = $email;
        $this->emailVerified = $emailVerified;
        $this->id = $id;
    }
}