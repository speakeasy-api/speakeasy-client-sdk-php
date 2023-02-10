<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\operations;



class GetSchemaDiffResponse
{
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSdkPhp\models\shared\Error $error;
    
    public ?\Speakeasy\SpeakeasyClientSdkPhp\models\shared\SchemaDiff $schemaDiff;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->error = null;
		$this->schemaDiff = null;
		$this->statusCode = 0;
	}
}
