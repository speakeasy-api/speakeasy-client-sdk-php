<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;



class FindApiEndpointRequest
{
    public \Speakeasy\SpeakeasyClientSDK\models\operations\FindApiEndpointPathParams $pathParams;
    
	public function __construct()
	{
		$this->pathParams = new \Speakeasy\SpeakeasyClientSDK\models\operations\FindApiEndpointPathParams();
	}
}
