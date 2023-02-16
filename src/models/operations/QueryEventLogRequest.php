<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;



class QueryEventLogRequest
{
    public QueryEventLogQueryParams $queryParams;
    
	public function __construct()
	{
		$this->queryParams = new \Speakeasy\SpeakeasyClientSDK\models\operations\QueryEventLogQueryParams();
	}
}
