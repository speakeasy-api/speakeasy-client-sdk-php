<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;

use \Speakeasy\SpeakeasyClientSDK\utils\SpeakeasyMetadata;

class DeleteSchemaPathParams
{
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=apiID')]
    public string $apiID;
    
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=revisionID')]
    public string $revisionID;
    
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=versionID')]
    public string $versionID;
    
	public function __construct()
	{
		$this->apiID = "";
		$this->revisionID = "";
		$this->versionID = "";
	}
}
