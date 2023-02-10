<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\operations;



class InsertVersionMetadataResponse
{
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSdkPhp\models\shared\Error $error;
    
    public int $statusCode;
    
    public ?\Speakeasy\SpeakeasyClientSdkPhp\models\shared\VersionMetadata $versionMetadata;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->error = null;
		$this->statusCode = 0;
		$this->versionMetadata = null;
	}
}
