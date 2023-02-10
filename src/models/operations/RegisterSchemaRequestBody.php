<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\operations;

use \Speakeasy\SpeakeasyClientSdkPhp\utils\SpeakeasyMetadata;

class RegisterSchemaRequestBody
{
    #[SpeakeasyMetadata('multipartForm:file=true')]
    public \Speakeasy\SpeakeasyClientSdkPhp\models\operations\RegisterSchemaRequestBodyFile $file;
    
	public function __construct()
	{
		$this->file = new \Speakeasy\SpeakeasyClientSdkPhp\models\operations\RegisterSchemaRequestBodyFile();
	}
}
