<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;



class GenerateOpenApiSpecResponse
{
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\Error $error = null;
    
    public ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\GenerateOpenApiSpecDiff $generateOpenApiSpecDiff = null;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->error = null;
		$this->generateOpenApiSpecDiff = null;
		$this->statusCode = 0;
	}
}
