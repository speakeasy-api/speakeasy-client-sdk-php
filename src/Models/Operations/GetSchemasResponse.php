<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;



class GetSchemasResponse
{
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\Error $error = null;
    
    /**
     * @var ?array<\Speakeasy\SpeakeasyClientSDK\Models\Shared\Schema>
     */
    public ?array $schemata = null;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->error = null;
		$this->schemata = null;
		$this->statusCode = 0;
	}
}
