<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;

use \Speakeasy\SpeakeasyClientSDK\utils\SpeakeasyMetadata;

class RegisterSchemaRequest
{
    public \Speakeasy\SpeakeasyClientSDK\models\operations\RegisterSchemaPathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=multipart/form-data')]
    public \Speakeasy\SpeakeasyClientSDK\models\operations\RegisterSchemaRequestBody $request;
    
	public function __construct()
	{
		$this->pathParams = new \Speakeasy\SpeakeasyClientSDK\models\operations\RegisterSchemaPathParams();
		$this->request = new \Speakeasy\SpeakeasyClientSDK\models\operations\RegisterSchemaRequestBody();
	}
}
