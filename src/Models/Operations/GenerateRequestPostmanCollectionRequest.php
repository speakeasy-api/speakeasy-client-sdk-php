<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;



class GenerateRequestPostmanCollectionRequest
{
    public GenerateRequestPostmanCollectionPathParams $pathParams;
    
	public function __construct()
	{
		$this->pathParams = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GenerateRequestPostmanCollectionPathParams();
	}
}
