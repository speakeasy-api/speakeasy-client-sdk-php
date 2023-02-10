<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\operations;



class GetAllApiVersionsRequest
{
    public \Speakeasy\SpeakeasyClientSdkPhp\models\operations\GetAllApiVersionsPathParams $pathParams;
    
    public \Speakeasy\SpeakeasyClientSdkPhp\models\operations\GetAllApiVersionsQueryParams $queryParams;
    
	public function __construct()
	{
		$this->pathParams = new \Speakeasy\SpeakeasyClientSdkPhp\models\operations\GetAllApiVersionsPathParams();
		$this->queryParams = new \Speakeasy\SpeakeasyClientSdkPhp\models\operations\GetAllApiVersionsQueryParams();
	}
}
