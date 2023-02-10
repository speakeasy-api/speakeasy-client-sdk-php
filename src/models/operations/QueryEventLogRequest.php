<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\operations;



class QueryEventLogRequest
{
    public \Speakeasy\SpeakeasyClientSdkPhp\models\operations\QueryEventLogQueryParams $queryParams;
    
	public function __construct()
	{
		$this->queryParams = new \Speakeasy\SpeakeasyClientSdkPhp\models\operations\QueryEventLogQueryParams();
	}
}
