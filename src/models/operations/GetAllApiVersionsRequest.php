<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;



class GetAllApiVersionsRequest
{
    public \Speakeasy\SpeakeasyClientSDK\models\operations\GetAllApiVersionsPathParams $pathParams;
    
    public \Speakeasy\SpeakeasyClientSDK\models\operations\GetAllApiVersionsQueryParams $queryParams;
    
	public function __construct()
	{
		$this->pathParams = new \Speakeasy\SpeakeasyClientSDK\models\operations\GetAllApiVersionsPathParams();
		$this->queryParams = new \Speakeasy\SpeakeasyClientSDK\models\operations\GetAllApiVersionsQueryParams();
	}
}
