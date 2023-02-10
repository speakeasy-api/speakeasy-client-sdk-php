<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;



class GetAllApiVersionsResponse
{
    /**
     * @var ?array<\Speakeasy\SpeakeasyClientSDK\models\shared\Api>
     */
    public ?array $apis;
    
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSDK\models\shared\Error $error;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->apis = null;
		$this->contentType = "";
		$this->error = null;
		$this->statusCode = 0;
	}
}