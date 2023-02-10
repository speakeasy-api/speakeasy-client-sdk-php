<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\shared;


/**
 * ApiEndpointInput
 * An ApiEndpoint is a description of an Endpoint for an API.
 */
class ApiEndpointInput
{
    #[\JMS\Serializer\Annotation\SerializedName('api_endpoint_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $apiEndpointId;
    
    #[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $description;
    
    #[\JMS\Serializer\Annotation\SerializedName('display_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $displayName;
    
    #[\JMS\Serializer\Annotation\SerializedName('method')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $method;
    
    #[\JMS\Serializer\Annotation\SerializedName('path')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $path;
    
    #[\JMS\Serializer\Annotation\SerializedName('version_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $versionId;
    
	public function __construct()
	{
		$this->apiEndpointId = "";
		$this->description = "";
		$this->displayName = "";
		$this->method = "";
		$this->path = "";
		$this->versionId = "";
	}
}
