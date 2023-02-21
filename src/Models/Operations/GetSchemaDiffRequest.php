<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;



class GetSchemaDiffRequest
{
    public GetSchemaDiffPathParams $pathParams;
    
	public function __construct()
	{
		$this->pathParams = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaDiffPathParams();
	}
}
