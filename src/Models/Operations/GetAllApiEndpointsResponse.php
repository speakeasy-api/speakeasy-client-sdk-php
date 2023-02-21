<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;



class GetAllApiEndpointsResponse
{
    /**
     * @var ?array<\Speakeasy\SpeakeasyClientSDK\Models\Shared\ApiEndpoint>
     */
    public ?array $apiEndpoints = null;
    
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\Error $error = null;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->apiEndpoints = null;
		$this->contentType = "";
		$this->error = null;
		$this->statusCode = 0;
	}
}
