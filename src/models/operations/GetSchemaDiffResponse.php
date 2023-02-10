<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;



class GetSchemaDiffResponse
{
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSDK\models\shared\Error $error;
    
    public ?\Speakeasy\SpeakeasyClientSDK\models\shared\SchemaDiff $schemaDiff;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->error = null;
		$this->schemaDiff = null;
		$this->statusCode = 0;
	}
}
