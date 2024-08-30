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
    #[\JMS\Serializer\Annotation\SerializedName('account_type')]
    #[\JMS\Serializer\Annotation\Type('\Speakeasy\SpeakeasyClientSDK\Models\Shared\AccountType|null')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?AccountType $accountType = null;

    /**
     *
     * @var ?string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;

    /**
     *
     * @var ?string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
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