<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;

use \Speakeasy\SpeakeasyClientSDK\utils\SpeakeasyMetadata;

class GetSchemaDiffPathParams
{
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=apiID')]
    public string $apiID;
    
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=baseRevisionID')]
    public string $baseRevisionID;
    
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=targetRevisionID')]
    public string $targetRevisionID;
    
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=versionID')]
    public string $versionID;
    
	public function __construct()
	{
		$this->apiID = "";
		$this->baseRevisionID = "";
		$this->targetRevisionID = "";
		$this->versionID = "";
	}
}
