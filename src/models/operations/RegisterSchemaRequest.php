<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\operations;

use \Speakeasy\SpeakeasyClientSdkPhp\utils\SpeakeasyMetadata;

class RegisterSchemaRequest
{
    public \Speakeasy\SpeakeasyClientSdkPhp\models\operations\RegisterSchemaPathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=multipart/form-data')]
    public \Speakeasy\SpeakeasyClientSdkPhp\models\operations\RegisterSchemaRequestBody $request;
    
	public function __construct()
	{
		$this->pathParams = new \Speakeasy\SpeakeasyClientSdkPhp\models\operations\RegisterSchemaPathParams();
		$this->request = new \Speakeasy\SpeakeasyClientSdkPhp\models\operations\RegisterSchemaRequestBody();
	}
}
