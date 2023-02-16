<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\shared;


/**
 * ApiEndpoint
 * An ApiEndpoint is a description of an Endpoint for an API.
 */
class ApiEndpoint
{
    #[\JMS\Serializer\Annotation\SerializedName('api_endpoint_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $apiEndpointId;
    
    #[\JMS\Serializer\Annotation\SerializedName('api_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $apiId;
    
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;
    
    #[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $description;
    
    #[\JMS\Serializer\Annotation\SerializedName('display_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $displayName;
    
    #[\JMS\Serializer\Annotation\SerializedName('matched')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $matched = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('method')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $method;
    
    #[\JMS\Serializer\Annotation\SerializedName('path')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $path;
    
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $updatedAt;
    
    #[\JMS\Serializer\Annotation\SerializedName('version_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $versionId;
    
    #[\JMS\Serializer\Annotation\SerializedName('workspace_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $workspaceId;
    
	public function __construct()
	{
		$this->apiEndpointId = "";
		$this->apiId = "";
		$this->createdAt = new \DateTime();
		$this->description = "";
		$this->displayName = "";
		$this->matched = null;
		$this->method = "";
		$this->path = "";
		$this->updatedAt = new \DateTime();
		$this->versionId = "";
		$this->workspaceId = "";
	}
}
