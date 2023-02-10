<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;

use \Speakeasy\SpeakeasyClientSDK\utils\SpeakeasyMetadata;

class UpsertApiEndpointRequest
{
    public \Speakeasy\SpeakeasyClientSDK\models\operations\UpsertApiEndpointPathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \Speakeasy\SpeakeasyClientSDK\models\shared\ApiEndpointInput $request;
    
	public function __construct()
	{
		$this->pathParams = new \Speakeasy\SpeakeasyClientSDK\models\operations\UpsertApiEndpointPathParams();
		$this->request = new \Speakeasy\SpeakeasyClientSDK\models\shared\ApiEndpointInput();
	}
}
