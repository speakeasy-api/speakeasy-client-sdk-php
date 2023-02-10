<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;



class GetApisRequest
{
    public \Speakeasy\SpeakeasyClientSDK\models\operations\GetApisQueryParams $queryParams;
    
	public function __construct()
	{
		$this->queryParams = new \Speakeasy\SpeakeasyClientSDK\models\operations\GetApisQueryParams();
	}
}
