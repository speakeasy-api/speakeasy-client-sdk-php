<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** FeatureFlag - A feature flag is a key-value pair that can be used to enable or disable features. */
class FeatureFlag
{
    /**
     *
     * @var string $featureFlag
     */
    #[\JMS\Serializer\Annotation\SerializedName('feature_flag')]
    public string $featureFlag;

    /**
     *
     * @var ?\DateTime $trialEndsAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('trial_ends_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $trialEndsAt = null;

    /**
     * @param  string  $featureFlag
     * @param  ?\DateTime  $trialEndsAt
     */
    public function __construct(string $featureFlag, ?\DateTime $trialEndsAt = null)
    {
        $this->featureFlag = $featureFlag;
        $this->trialEndsAt = $trialEndsAt;
    }
}