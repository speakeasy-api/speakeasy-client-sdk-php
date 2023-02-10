<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;



class GetSchemasResponse
{
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSDK\models\shared\Error $error;
    
    /**
     * @var ?array<\Speakeasy\SpeakeasyClientSDK\models\shared\Schema>
     */
    public ?array $schemata;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->error = null;
		$this->schemata = null;
		$this->statusCode = 0;
	}
}
