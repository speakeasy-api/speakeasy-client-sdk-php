<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;



class GetApisRequest
{
    public GetApisQueryParams $queryParams;
    
	public function __construct()
	{
		$this->queryParams = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetApisQueryParams();
	}
}
