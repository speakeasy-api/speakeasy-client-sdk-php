<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;



class RunPluginResponse
{
    /**
     * @var ?array<\Speakeasy\SpeakeasyClientSDK\Models\Shared\BoundedRequest>
     */
    public ?array $boundedRequests = null;
    
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\Error $error = null;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->boundedRequests = null;
		$this->contentType = "";
		$this->error = null;
		$this->statusCode = 0;
	}
}
