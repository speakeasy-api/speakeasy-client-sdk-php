<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;



class RunPluginRequest
{
    public \Speakeasy\SpeakeasyClientSDK\models\operations\RunPluginPathParams $pathParams;
    
    public \Speakeasy\SpeakeasyClientSDK\models\operations\RunPluginQueryParams $queryParams;
    
	public function __construct()
	{
		$this->pathParams = new \Speakeasy\SpeakeasyClientSDK\models\operations\RunPluginPathParams();
		$this->queryParams = new \Speakeasy\SpeakeasyClientSDK\models\operations\RunPluginQueryParams();
	}
}
