<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;



class InsertVersionMetadataResponse
{
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\Error $error = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    public ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\VersionMetadata $versionMetadata = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->error = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->versionMetadata = null;
	}
}
