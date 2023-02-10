<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;



class GetValidEmbedAccessTokensResponse
{
    public string $contentType;
    
    /**
     * @var ?array<\Speakeasy\SpeakeasyClientSDK\models\shared\EmbedToken>
     */
    public ?array $embedTokens;
    
    public ?\Speakeasy\SpeakeasyClientSDK\models\shared\Error $error;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->embedTokens = null;
		$this->error = null;
		$this->statusCode = 0;
	}
}
