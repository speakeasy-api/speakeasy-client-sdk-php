<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;



class RunPluginResponse
{
    /**
     * @var ?array<\Speakeasy\SpeakeasyClientSDK\models\shared\BoundedRequest>
     */
    public ?array $boundedRequests;
    
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSDK\models\shared\Error $error;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->boundedRequests = null;
		$this->contentType = "";
		$this->error = null;
		$this->statusCode = 0;
	}
}
