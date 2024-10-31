<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


class Workspaces
{
    /**
     *
     * @var ?AccountType $accountType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('account_type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Speakeasy\SpeakeasyClientSDK\Models\Shared\AccountType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AccountType $accountType = null;

    /**
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * @param  ?AccountType  $accountType
     * @param  ?string  $id
     * @param  ?string  $name
     * @param  ?\DateTime  $updatedAt
     */
    public function __construct(?AccountType $accountType = null, ?string $id = null, ?string $name = null, ?\DateTime $updatedAt = null)
    {
        $this->accountType = $accountType;
        $this->id = $id;
        $this->name = $name;
        $this->updatedAt = $updatedAt;
    }
}