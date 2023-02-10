<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;



class GetApiEndpointRequest
{
    public \Speakeasy\SpeakeasyClientSDK\models\operations\GetApiEndpointPathParams $pathParams;
    
	public function __construct()
	{
		$this->pathParams = new \Speakeasy\SpeakeasyClientSDK\models\operations\GetApiEndpointPathParams();
	}
}
