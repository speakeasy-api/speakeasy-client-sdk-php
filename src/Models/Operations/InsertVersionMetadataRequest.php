<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use \Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;

class InsertVersionMetadataRequest
{
    public InsertVersionMetadataPathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \Speakeasy\SpeakeasyClientSDK\Models\Shared\VersionMetadataInput $request;
    
	public function __construct()
	{
		$this->pathParams = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\InsertVersionMetadataPathParams();
		$this->request = new \Speakeasy\SpeakeasyClientSDK\Models\Shared\VersionMetadataInput();
	}
}
