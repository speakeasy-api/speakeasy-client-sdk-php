<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;



class GetEmbedAccessTokenResponse
{
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\EmbedAccessTokenResponse $embedAccessTokenResponse = null;
    
    public ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\Error $error = null;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->embedAccessTokenResponse = null;
		$this->error = null;
		$this->statusCode = 0;
	}
}
