<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;



class GenerateOpenApiSpecForApiEndpointRequest
{
    public GenerateOpenApiSpecForApiEndpointPathParams $pathParams;
    
	public function __construct()
	{
		$this->pathParams = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GenerateOpenApiSpecForApiEndpointPathParams();
	}
}
