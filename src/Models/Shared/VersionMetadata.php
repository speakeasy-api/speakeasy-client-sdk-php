<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/**
 * VersionMetadata
 * A set of keys and associated values, attached to a particular version of an Api.
 */
class VersionMetadata
{
    #[\JMS\Serializer\Annotation\SerializedName('api_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $apiId;
    
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;
    
    #[\JMS\Serializer\Annotation\SerializedName('meta_key')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $metaKey;
    
    #[\JMS\Serializer\Annotation\SerializedName('meta_value')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $metaValue;
    
    #[\JMS\Serializer\Annotation\SerializedName('version_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $versionId;
    
    #[\JMS\Serializer\Annotation\SerializedName('workspace_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $workspaceId;
    
	public function __construct()
	{
		$this->apiId = "";
		$this->createdAt = new \DateTime();
		$this->metaKey = "";
		$this->metaValue = "";
		$this->versionId = "";
		$this->workspaceId = "";
	}
}
