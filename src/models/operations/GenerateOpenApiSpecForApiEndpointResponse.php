<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;



class GenerateOpenApiSpecForApiEndpointResponse
{
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSDK\models\shared\Error $error;
    
    public ?\Speakeasy\SpeakeasyClientSDK\models\shared\GenerateOpenApiSpecDiff $generateOpenApiSpecDiff;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->error = null;
		$this->generateOpenApiSpecDiff = null;
		$this->statusCode = 0;
	}
}
