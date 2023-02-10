<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;

use \Speakeasy\SpeakeasyClientSDK\utils\SpeakeasyMetadata;

class RegisterSchemaRequestBodyFile
{
    #[SpeakeasyMetadata('multipartForm:content=true')]
    public string $content;
    
    #[SpeakeasyMetadata('multipartForm:name=file')]
    public string $file;
    
	public function __construct()
	{
		$this->content = "";
		$this->file = "";
	}
}
