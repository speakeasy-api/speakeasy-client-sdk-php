<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\operations;



class GetSchemasResponse
{
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSdkPhp\models\shared\Error $error;
    
    /**
     * @var ?array<\Speakeasy\SpeakeasyClientSdkPhp\models\shared\Schema>
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
