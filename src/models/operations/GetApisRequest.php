<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\operations;



class GetApisRequest
{
    public \Speakeasy\SpeakeasyClientSdkPhp\models\operations\GetApisQueryParams $queryParams;
    
	public function __construct()
	{
		$this->queryParams = new \Speakeasy\SpeakeasyClientSdkPhp\models\operations\GetApisQueryParams();
	}
}
