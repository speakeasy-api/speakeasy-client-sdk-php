<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;

use \Speakeasy\SpeakeasyClientSDK\utils\SpeakeasyMetadata;

class UpsertApiEndpointPathParams
{
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=apiEndpointID')]
    public string $apiEndpointID;
    
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=apiID')]
    public string $apiID;
    
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=versionID')]
    public string $versionID;
    
	public function __construct()
	{
		$this->apiEndpointID = "";
		$this->apiID = "";
		$this->versionID = "";
	}
}
