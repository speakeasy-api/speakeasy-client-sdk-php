<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\operations;

use \Speakeasy\SpeakeasyClientSdkPhp\utils\SpeakeasyMetadata;

class GenerateRequestPostmanCollectionPathParams
{
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=requestID')]
    public string $requestID;
    
	public function __construct()
	{
		$this->requestID = "";
	}
}
