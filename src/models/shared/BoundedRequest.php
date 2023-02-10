<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\shared;


/**
 * BoundedRequest
 * A BoundedRequest is a request that has been logged by the Speakeasy without the contents of the request.
 */
class BoundedRequest
{
    #[\JMS\Serializer\Annotation\SerializedName('api_endpoint_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $apiEndpointId;
    
    #[\JMS\Serializer\Annotation\SerializedName('api_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $apiId;
    
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.uP'>")]
    public \DateTime $createdAt;
    
    #[\JMS\Serializer\Annotation\SerializedName('customer_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $customerId;
    
    #[\JMS\Serializer\Annotation\SerializedName('latency')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $latency;
    
    /**
     * @var ?array<\Speakeasy\SpeakeasyClientSdkPhp\models\shared\RequestMetadata>
     */
    #[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('array<Speakeasy\SpeakeasyClientSdkPhp\models\shared\RequestMetadata>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $metadata;
    
    #[\JMS\Serializer\Annotation\SerializedName('method')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $method;
    
    #[\JMS\Serializer\Annotation\SerializedName('path')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $path;
    
    #[\JMS\Serializer\Annotation\SerializedName('request_finish_time')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.uP'>")]
    public \DateTime $requestFinishTime;
    
    #[\JMS\Serializer\Annotation\SerializedName('request_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $requestId;
    
    #[\JMS\Serializer\Annotation\SerializedName('request_start_time')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.uP'>")]
    public \DateTime $requestStartTime;
    
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $status;
    
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
		$this->customerId = "";
		$this->latency = 0;
		$this->metadata = null;
		$this->method = "";
		$this->path = "";
		$this->requestFinishTime = new \DateTime();
		$this->requestId = "";
		$this->requestStartTime = new \DateTime();
		$this->status = 0;
		$this->versionId = "";
		$this->workspaceId = "";
	}
}
