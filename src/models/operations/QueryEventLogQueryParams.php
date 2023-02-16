<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;

use \Speakeasy\SpeakeasyClientSDK\utils\SpeakeasyMetadata;

class QueryEventLogQueryParams
{
    #[SpeakeasyMetadata('queryParam:serialization=json,name=filters')]
    public ?\Speakeasy\SpeakeasyClientSDK\models\shared\Filters $filters = null;
    
	public function __construct()
	{
		$this->filters = null;
	}
}
