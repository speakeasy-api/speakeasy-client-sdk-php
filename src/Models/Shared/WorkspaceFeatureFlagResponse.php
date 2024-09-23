<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** WorkspaceFeatureFlagResponse - Workspace feature flag response */
class WorkspaceFeatureFlagResponse
{
    /**
     * $featureFlags
     *
     * @var ?array<FeatureFlag> $featureFlags
     */
    #[\JMS\Serializer\Annotation\SerializedName('feature_flags')]
    #[\JMS\Serializer\Annotation\Type('array<\Speakeasy\SpeakeasyClientSDK\Models\Shared\FeatureFlag>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $featureFlags = null;

    /**
     * @param  ?array<FeatureFlag>  $featureFlags
     */
    public function __construct(?array $featureFlags = null)
    {
        $this->featureFlags = $featureFlags;
    }
}