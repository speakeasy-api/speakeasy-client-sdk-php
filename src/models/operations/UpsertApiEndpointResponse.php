<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;



class UpsertApiEndpointResponse
{
    public ?\Speakeasy\SpeakeasyClientSDK\models\shared\ApiEndpoint $apiEndpoint = null;
    
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSDK\models\shared\Error $error = null;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->apiEndpoint = null;
		$this->contentType = "";
		$this->error = null;
		$this->statusCode = 0;
	}
}
