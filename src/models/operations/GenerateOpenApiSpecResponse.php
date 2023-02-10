<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\operations;



class GenerateOpenApiSpecResponse
{
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSdkPhp\models\shared\Error $error;
    
    public ?\Speakeasy\SpeakeasyClientSdkPhp\models\shared\GenerateOpenApiSpecDiff $generateOpenApiSpecDiff;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->error = null;
		$this->generateOpenApiSpecDiff = null;
		$this->statusCode = 0;
	}
}
