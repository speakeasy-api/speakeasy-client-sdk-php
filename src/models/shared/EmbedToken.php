<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\shared;


/**
 * EmbedToken
 * A representation of an embed token granted for working with Speakeasy components.
 */
class EmbedToken
{
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;
    
    #[\JMS\Serializer\Annotation\SerializedName('created_by')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $createdBy;
    
    #[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $description;
    
    #[\JMS\Serializer\Annotation\SerializedName('expires_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $expiresAt;
    
    #[\JMS\Serializer\Annotation\SerializedName('filters')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $filters;
    
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;
    
    #[\JMS\Serializer\Annotation\SerializedName('last_used')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $lastUsed = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('revoked_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $revokedAt = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('revoked_by')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $revokedBy = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('workspace_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $workspaceId;
    
	public function __construct()
	{
		$this->createdAt = new \DateTime();
		$this->createdBy = "";
		$this->description = "";
		$this->expiresAt = new \DateTime();
		$this->filters = "";
		$this->id = "";
		$this->lastUsed = null;
		$this->revokedAt = null;
		$this->revokedBy = null;
		$this->workspaceId = "";
	}
}
