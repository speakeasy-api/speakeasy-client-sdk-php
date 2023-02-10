<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\operations;



class GetAllApiEndpointsResponse
{
    /**
     * @var ?array<\Speakeasy\SpeakeasyClientSdkPhp\models\shared\ApiEndpoint>
     */
    public ?array $apiEndpoints;
    
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSdkPhp\models\shared\Error $error;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->apiEndpoints = null;
		$this->contentType = "";
		$this->error = null;
		$this->statusCode = 0;
	}
}
