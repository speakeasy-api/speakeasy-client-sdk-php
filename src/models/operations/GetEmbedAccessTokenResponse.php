<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;



class GetEmbedAccessTokenResponse
{
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSDK\models\shared\EmbedAccessTokenResponse $embedAccessTokenResponse;
    
    public ?\Speakeasy\SpeakeasyClientSDK\models\shared\Error $error;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->embedAccessTokenResponse = null;
		$this->error = null;
		$this->statusCode = 0;
	}
}
