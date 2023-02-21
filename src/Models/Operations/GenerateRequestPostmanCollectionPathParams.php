<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use \Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;

class GenerateRequestPostmanCollectionPathParams
{
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=requestID')]
    public string $requestID;
    
	public function __construct()
	{
		$this->requestID = "";
	}
}
