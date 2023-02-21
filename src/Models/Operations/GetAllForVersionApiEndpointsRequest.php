<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;



class GetAllForVersionApiEndpointsRequest
{
    public GetAllForVersionApiEndpointsPathParams $pathParams;
    
	public function __construct()
	{
		$this->pathParams = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllForVersionApiEndpointsPathParams();
	}
}
