<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\shared;


/**
 * Api
 * An Api is representation of a API (a collection of API Endpoints) within the Speakeasy Platform.
 */
class Api
{
    #[\JMS\Serializer\Annotation\SerializedName('api_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $apiId;
    
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;
    
    #[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $description;
    
    #[\JMS\Serializer\Annotation\SerializedName('matched')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $matched = null;
    
    /**
     * @var ?array<string, array<string>>
     */
    #[\JMS\Serializer\Annotation\SerializedName('meta_data')]
    #[\JMS\Serializer\Annotation\Type('array<string, array<string>>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $metaData = null;
    
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
		$this->apiId = "";
		$this->createdAt = new \DateTime();
		$this->description = "";
		$this->matched = null;
		$this->metaData = null;
		$this->updatedAt = new \DateTime();
		$this->versionId = "";
		$this->workspaceId = "";
	}
}
