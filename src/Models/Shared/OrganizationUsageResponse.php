<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** OrganizationUsageResponse - A billing summary of organization usage */
class OrganizationUsageResponse
{
    /**
     * List of allowed languages
     *
     * @var array<string> $allowedLanguages
     */
    #[\JMS\Serializer\Annotation\SerializedName('allowed_languages')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    public array $allowedLanguages;

    /**
     * Expiry date of the free trial, will be null if no trial
     *
     * @var ?\DateTime $freeTrialExpiry
     */
    #[\JMS\Serializer\Annotation\SerializedName('free_trial_expiry')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $freeTrialExpiry = null;

    /**
     * Total number of allowed languages, -1 if unlimited
     *
     * @var int $totalAllowedLanguages
     */
    #[\JMS\Serializer\Annotation\SerializedName('total_allowed_languages')]
    public int $totalAllowedLanguages;

    /**
     * $usage
     *
     * @var array<OrganizationUsage> $usage
     */
    #[\JMS\Serializer\Annotation\SerializedName('usage')]
    #[\JMS\Serializer\Annotation\Type('array<\Speakeasy\SpeakeasyClientSDK\Models\Shared\OrganizationUsage>')]
    public array $usage;

    /**
     * @param  array<string>  $allowedLanguages
     * @param  int  $totalAllowedLanguages
     * @param  array<OrganizationUsage>  $usage
     * @param  ?\DateTime  $freeTrialExpiry
     */
    public function __construct(array $allowedLanguages, int $totalAllowedLanguages, array $usage, ?\DateTime $freeTrialExpiry = null)
    {
        $this->allowedLanguages = $allowedLanguages;
        $this->totalAllowedLanguages = $totalAllowedLanguages;
        $this->usage = $usage;
        $this->freeTrialExpiry = $freeTrialExpiry;
    }
}