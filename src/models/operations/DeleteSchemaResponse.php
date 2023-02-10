<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;



class DeleteSchemaResponse
{
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSDK\models\shared\Error $error;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->error = null;
		$this->statusCode = 0;
	}
}
