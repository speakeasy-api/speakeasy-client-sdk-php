<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\operations;

use \Speakeasy\SpeakeasyClientSdkPhp\utils\SpeakeasyMetadata;

class InsertVersionMetadataRequest
{
    public \Speakeasy\SpeakeasyClientSdkPhp\models\operations\InsertVersionMetadataPathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \Speakeasy\SpeakeasyClientSdkPhp\models\shared\VersionMetadataInput $request;
    
	public function __construct()
	{
		$this->pathParams = new \Speakeasy\SpeakeasyClientSdkPhp\models\operations\InsertVersionMetadataPathParams();
		$this->request = new \Speakeasy\SpeakeasyClientSdkPhp\models\shared\VersionMetadataInput();
	}
}
