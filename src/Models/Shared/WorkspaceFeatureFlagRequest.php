<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** WorkspaceFeatureFlagRequest - A request to add workspace feature flags */
class WorkspaceFeatureFlagRequest
{
    /**
     * $featureFlags
     *
     * @var array<WorkspaceFeatureFlag> $featureFlags
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('feature_flags')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Speakeasy\SpeakeasyClientSDK\Models\Shared\WorkspaceFeatureFlag>')]
    public array $featureFlags;

    /**
     * @param  array<WorkspaceFeatureFlag>  $featureFlags
     * @phpstan-pure
     */
    public function __construct(array $featureFlags)
    {
        $this->featureFlags = $featureFlags;
    }
}