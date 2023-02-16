<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;



class GenerateOpenApiSpecForApiEndpointRequest
{
    public GenerateOpenApiSpecForApiEndpointPathParams $pathParams;
    
	public function __construct()
	{
		$this->pathParams = new \Speakeasy\SpeakeasyClientSDK\models\operations\GenerateOpenApiSpecForApiEndpointPathParams();
	}
}
