<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use \Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;

class RunPluginPathParams
{
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=pluginID')]
    public string $pluginID;
    
	public function __construct()
	{
		$this->pluginID = "";
	}
}
