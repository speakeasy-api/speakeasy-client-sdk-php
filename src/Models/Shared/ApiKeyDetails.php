<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


class ApiKeyDetails
{
	#[\JMS\Serializer\Annotation\SerializedName('account_type')]
    #[\JMS\Serializer\Annotation\Type('enum<Speakeasy\SpeakeasyClientSDK\Models\Shared\AccountType>')]
    public AccountType $accountType;
    
    /**
     * $featureFlags
     * 
     * @var array<\Speakeasy\SpeakeasyClientSDK\Models\Shared\FeatureFlags> $featureFlags
     */
	#[\JMS\Serializer\Annotation\SerializedName('feature_flags')]
    #[\JMS\Serializer\Annotation\Type('array<enum<Speakeasy\SpeakeasyClientSDK\Models\Shared\FeatureFlags>>')]
    public array $featureFlags;
    
	#[\JMS\Serializer\Annotation\SerializedName('generation_access_unlimited')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $generationAccessUnlimited = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('org_slug')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $orgSlug;
    
	#[\JMS\Serializer\Annotation\SerializedName('workspace_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $workspaceId;
    
	#[\JMS\Serializer\Annotation\SerializedName('workspace_slug')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $workspaceSlug;
    
	public function __construct()
	{
		$this->accountType = \Speakeasy\SpeakeasyClientSDK\Models\Shared\AccountType::Free;
		$this->featureFlags = [];
		$this->generationAccessUnlimited = null;
		$this->orgSlug = "";
		$this->workspaceId = "";
		$this->workspaceSlug = "";
	}
}
