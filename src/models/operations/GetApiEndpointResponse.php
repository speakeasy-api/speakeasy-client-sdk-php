<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;



class GetApiEndpointResponse
{
    public ?\Speakeasy\SpeakeasyClientSDK\models\shared\ApiEndpoint $apiEndpoint;
    
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSDK\models\shared\Error $error;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->apiEndpoint = null;
		$this->contentType = "";
		$this->error = null;
		$this->statusCode = 0;
	}
}
