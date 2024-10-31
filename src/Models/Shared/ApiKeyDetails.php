<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


class ApiKeyDetails
{
    /**
     *
     * @var AccountType $accountTypeV2
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('account_type_v2')]
    #[\Speakeasy\Serializer\Annotation\Type('\Speakeasy\SpeakeasyClientSDK\Models\Shared\AccountType')]
    public AccountType $accountTypeV2;

    /**
     * $enabledFeatures
     *
     * @var array<string> $enabledFeatures
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('enabled_features')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>')]
    public array $enabledFeatures;

    /**
     *
     * @var ?array<string> $featureFlags
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('feature_flags')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $featureFlags = null;

    /**
     *
     * @var ?bool $generationAccessUnlimited
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('generation_access_unlimited')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $generationAccessUnlimited = null;

    /**
     *
     * @var string $orgSlug
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('org_slug')]
    public string $orgSlug;

    /**
     *
     * @var bool $telemetryDisabled
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('telemetry_disabled')]
    public bool $telemetryDisabled;

    /**
     * Workspace creation timestamp.
     *
     * @var \DateTime $workspaceCreatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('workspace_created_at')]
    public \DateTime $workspaceCreatedAt;

    /**
     *
     * @var string $workspaceId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('workspace_id')]
    public string $workspaceId;

    /**
     *
     * @var string $workspaceSlug
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('workspace_slug')]
    public string $workspaceSlug;

    /**
     * @param  AccountType  $accountTypeV2
     * @param  array<string>  $enabledFeatures
     * @param  string  $orgSlug
     * @param  bool  $telemetryDisabled
     * @param  \DateTime  $workspaceCreatedAt
     * @param  string  $workspaceId
     * @param  string  $workspaceSlug
     * @param  ?array<string>  $featureFlags
     * @param  ?bool  $generationAccessUnlimited
     */
    public function __construct(AccountType $accountTypeV2, array $enabledFeatures, string $orgSlug, bool $telemetryDisabled, \DateTime $workspaceCreatedAt, string $workspaceId, string $workspaceSlug, ?array $featureFlags = null, ?bool $generationAccessUnlimited = null)
    {
        $this->accountTypeV2 = $accountTypeV2;
        $this->enabledFeatures = $enabledFeatures;
        $this->orgSlug = $orgSlug;
        $this->telemetryDisabled = $telemetryDisabled;
        $this->workspaceCreatedAt = $workspaceCreatedAt;
        $this->workspaceId = $workspaceId;
        $this->workspaceSlug = $workspaceSlug;
        $this->featureFlags = $featureFlags;
        $this->generationAccessUnlimited = $generationAccessUnlimited;
    }
}