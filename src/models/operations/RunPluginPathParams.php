<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;

use \Speakeasy\SpeakeasyClientSDK\utils\SpeakeasyMetadata;

class RunPluginPathParams
{
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=pluginID')]
    public string $pluginID;
    
	public function __construct()
	{
		$this->pluginID = "";
	}
}
