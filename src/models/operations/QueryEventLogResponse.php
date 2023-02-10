<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\operations;



class QueryEventLogResponse
{
    /**
     * @var ?array<\Speakeasy\SpeakeasyClientSdkPhp\models\shared\BoundedRequest>
     */
    public ?array $boundedRequests;
    
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSdkPhp\models\shared\Error $error;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->boundedRequests = null;
		$this->contentType = "";
		$this->error = null;
		$this->statusCode = 0;
	}
}
