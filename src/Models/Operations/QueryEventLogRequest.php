<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;



class QueryEventLogRequest
{
    public QueryEventLogQueryParams $queryParams;
    
	public function __construct()
	{
		$this->queryParams = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\QueryEventLogQueryParams();
	}
}
