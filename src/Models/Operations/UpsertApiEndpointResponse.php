<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;



class UpsertApiEndpointResponse
{
    public ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\ApiEndpoint $apiEndpoint = null;
    
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\Error $error = null;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->apiEndpoint = null;
		$this->contentType = "";
		$this->error = null;
		$this->statusCode = 0;
	}
}
