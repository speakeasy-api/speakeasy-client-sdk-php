<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use \Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;

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
