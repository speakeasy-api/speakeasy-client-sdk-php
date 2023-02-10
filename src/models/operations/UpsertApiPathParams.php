<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\operations;

use \Speakeasy\SpeakeasyClientSdkPhp\utils\SpeakeasyMetadata;

class UpsertApiPathParams
{
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=apiID')]
    public string $apiID;
    
	public function __construct()
	{
		$this->apiID = "";
	}
}
