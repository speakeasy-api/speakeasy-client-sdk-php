<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\operations;



class GetEmbedAccessTokenRequest
{
    public \Speakeasy\SpeakeasyClientSdkPhp\models\operations\GetEmbedAccessTokenQueryParams $queryParams;
    
	public function __construct()
	{
		$this->queryParams = new \Speakeasy\SpeakeasyClientSdkPhp\models\operations\GetEmbedAccessTokenQueryParams();
	}
}
