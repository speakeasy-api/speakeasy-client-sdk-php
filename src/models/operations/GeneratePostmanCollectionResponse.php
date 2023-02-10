<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;



class GeneratePostmanCollectionResponse
{
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSDK\models\shared\Error $error;
    
    public ?string $postmanCollection;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->error = null;
		$this->postmanCollection = null;
		$this->statusCode = 0;
	}
}
