<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;



class GenerateOpenApiSpecResponse
{
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\Error $error = null;
    
    public ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\GenerateOpenApiSpecDiff $generateOpenApiSpecDiff = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->error = null;
		$this->generateOpenApiSpecDiff = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
