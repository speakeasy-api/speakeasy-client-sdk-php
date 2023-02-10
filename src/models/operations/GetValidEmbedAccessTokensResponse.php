<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\operations;



class GetValidEmbedAccessTokensResponse
{
    public string $contentType;
    
    /**
     * @var ?array<\Speakeasy\SpeakeasyClientSdkPhp\models\shared\EmbedToken>
     */
    public ?array $embedTokens;
    
    public ?\Speakeasy\SpeakeasyClientSdkPhp\models\shared\Error $error;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->embedTokens = null;
		$this->error = null;
		$this->statusCode = 0;
	}
}
