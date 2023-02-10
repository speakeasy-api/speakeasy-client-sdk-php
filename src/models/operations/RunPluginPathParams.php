<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\operations;

use \Speakeasy\SpeakeasyClientSdkPhp\utils\SpeakeasyMetadata;

class RunPluginPathParams
{
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=pluginID')]
    public string $pluginID;
    
	public function __construct()
	{
		$this->pluginID = "";
	}
}
