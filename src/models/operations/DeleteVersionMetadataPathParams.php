<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\operations;

use \Speakeasy\SpeakeasyClientSdkPhp\utils\SpeakeasyMetadata;

class DeleteVersionMetadataPathParams
{
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=apiID')]
    public string $apiID;
    
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=metaKey')]
    public string $metaKey;
    
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=metaValue')]
    public string $metaValue;
    
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=versionID')]
    public string $versionID;
    
	public function __construct()
	{
		$this->apiID = "";
		$this->metaKey = "";
		$this->metaValue = "";
		$this->versionID = "";
	}
}
