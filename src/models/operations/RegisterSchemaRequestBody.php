<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;

use \Speakeasy\SpeakeasyClientSDK\utils\SpeakeasyMetadata;

class RegisterSchemaRequestBody
{
    #[SpeakeasyMetadata('multipartForm:file=true')]
    public RegisterSchemaRequestBodyFile $file;
    
	public function __construct()
	{
		$this->file = new \Speakeasy\SpeakeasyClientSDK\models\operations\RegisterSchemaRequestBodyFile();
	}
}
