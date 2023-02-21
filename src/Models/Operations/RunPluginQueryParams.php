<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use \Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;

class RunPluginQueryParams
{
    #[SpeakeasyMetadata('queryParam:serialization=json,name=filters')]
    public ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\Filters $filters = null;
    
	public function __construct()
	{
		$this->filters = null;
	}
}
