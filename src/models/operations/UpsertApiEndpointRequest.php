<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\operations;

use \Speakeasy\SpeakeasyClientSdkPhp\utils\SpeakeasyMetadata;

class UpsertApiEndpointRequest
{
    public \Speakeasy\SpeakeasyClientSdkPhp\models\operations\UpsertApiEndpointPathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \Speakeasy\SpeakeasyClientSdkPhp\models\shared\ApiEndpointInput $request;
    
	public function __construct()
	{
		$this->pathParams = new \Speakeasy\SpeakeasyClientSdkPhp\models\operations\UpsertApiEndpointPathParams();
		$this->request = new \Speakeasy\SpeakeasyClientSdkPhp\models\shared\ApiEndpointInput();
	}
}
