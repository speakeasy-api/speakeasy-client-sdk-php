<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;

use \Speakeasy\SpeakeasyClientSDK\utils\SpeakeasyMetadata;

class InsertVersionMetadataRequest
{
    public \Speakeasy\SpeakeasyClientSDK\models\operations\InsertVersionMetadataPathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \Speakeasy\SpeakeasyClientSDK\models\shared\VersionMetadataInput $request;
    
	public function __construct()
	{
		$this->pathParams = new \Speakeasy\SpeakeasyClientSDK\models\operations\InsertVersionMetadataPathParams();
		$this->request = new \Speakeasy\SpeakeasyClientSDK\models\shared\VersionMetadataInput();
	}
}
