<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\operations;



class GetEmbedAccessTokenResponse
{
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSdkPhp\models\shared\EmbedAccessTokenResponse $embedAccessTokenResponse;
    
    public ?\Speakeasy\SpeakeasyClientSdkPhp\models\shared\Error $error;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->embedAccessTokenResponse = null;
		$this->error = null;
		$this->statusCode = 0;
	}
}
