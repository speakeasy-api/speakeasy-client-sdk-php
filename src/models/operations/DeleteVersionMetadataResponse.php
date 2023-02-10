<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\operations;



class DeleteVersionMetadataResponse
{
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSdkPhp\models\shared\Error $error;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->error = null;
		$this->statusCode = 0;
	}
}
