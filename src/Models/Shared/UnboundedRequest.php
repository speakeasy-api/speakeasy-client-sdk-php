<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/**
 * UnboundedRequest
 * An UnboundedRequest represents the HAR content capture by Speakeasy when logging a request.
 */
class UnboundedRequest
{
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;
    
    #[\JMS\Serializer\Annotation\SerializedName('har')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $har;
    
    #[\JMS\Serializer\Annotation\SerializedName('har_size_bytes')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $harSizeBytes;
    
    #[\JMS\Serializer\Annotation\SerializedName('request_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $requestId;
    
    #[\JMS\Serializer\Annotation\SerializedName('workspace_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $workspaceId;
    
	public function __construct()
	{
		$this->createdAt = new \DateTime();
		$this->har = "";
		$this->harSizeBytes = 0;
		$this->requestId = "";
		$this->workspaceId = "";
	}
}
