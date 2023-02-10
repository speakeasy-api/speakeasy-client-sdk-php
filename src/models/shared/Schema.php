<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\shared;


/**
 * Schema
 * A Schema represents an API schema for a particular Api and Version.
 */
class Schema
{
    #[\JMS\Serializer\Annotation\SerializedName('api_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $apiId;
    
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.uP'>")]
    public \DateTime $createdAt;
    
    #[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $description;
    
    #[\JMS\Serializer\Annotation\SerializedName('revision_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $revisionId;
    
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
		$this->revisionId = "";
		$this->versionId = "";
		$this->workspaceId = "";
	}
}
