<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use \Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;

class RegisterSchemaRequestBody
{
    #[SpeakeasyMetadata('multipartForm:file=true')]
    public RegisterSchemaRequestBodyFile $file;
    
	public function __construct()
	{
		$this->file = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\RegisterSchemaRequestBodyFile();
	}
}
