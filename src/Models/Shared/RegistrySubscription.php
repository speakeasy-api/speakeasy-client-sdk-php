<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** RegistrySubscription - A subscription to a registry event */
class RegistrySubscription
{
    /**
     *
     * @var \DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    public \DateTime $createdAt;

    /**
     *
     * @var ?\DateTime $deletedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('deleted_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $deletedAt = null;

    /**
     *
     * @var EventType $eventType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('event_type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Speakeasy\SpeakeasyClientSDK\Models\Shared\EventType')]
    public EventType $eventType;

    /**
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var string $namespaceName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('namespace_name')]
    public string $namespaceName;

    /**
     *
     * @var string $subscriptionSettings
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subscription_settings')]
    public string $subscriptionSettings;

    /**
     *
     * @var SubscriptionType $subscriptionType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subscription_type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Speakeasy\SpeakeasyClientSDK\Models\Shared\SubscriptionType')]
    public SubscriptionType $subscriptionType;

    /**
     * $tags
     *
     * @var ?array<string> $tags
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tags')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $tags = null;

    /**
     *
     * @var \DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    public \DateTime $updatedAt;

    /**
     *
     * @var string $workspaceId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('workspace_id')]
    public string $workspaceId;

    /**
     * @param  \DateTime  $createdAt
     * @param  EventType  $eventType
     * @param  string  $id
     * @param  string  $namespaceName
     * @param  string  $subscriptionSettings
     * @param  SubscriptionType  $subscriptionType
     * @param  \DateTime  $updatedAt
     * @param  string  $workspaceId
     * @param  ?\DateTime  $deletedAt
     * @param  ?array<string>  $tags
     */
    public function __construct(\DateTime $createdAt, EventType $eventType, string $id, string $namespaceName, string $subscriptionSettings, SubscriptionType $subscriptionType, \DateTime $updatedAt, string $workspaceId, ?\DateTime $deletedAt = null, ?array $tags = null)
    {
        $this->createdAt = $createdAt;
        $this->eventType = $eventType;
        $this->id = $id;
        $this->namespaceName = $namespaceName;
        $this->subscriptionSettings = $subscriptionSettings;
        $this->subscriptionType = $subscriptionType;
        $this->updatedAt = $updatedAt;
        $this->workspaceId = $workspaceId;
        $this->deletedAt = $deletedAt;
        $this->tags = $tags;
    }
}