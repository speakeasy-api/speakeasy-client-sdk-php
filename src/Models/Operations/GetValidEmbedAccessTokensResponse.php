<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;



class GetValidEmbedAccessTokensResponse
{
    public string $contentType;
    
    /**
     * @var ?array<\Speakeasy\SpeakeasyClientSDK\Models\Shared\EmbedToken>
     */
    public ?array $embedTokens = null;
    
    public ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\Error $error = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->embedTokens = null;
		$this->error = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
