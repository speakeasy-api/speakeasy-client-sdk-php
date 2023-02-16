<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;



class RunPluginRequest
{
    public RunPluginPathParams $pathParams;
    
    public RunPluginQueryParams $queryParams;
    
	public function __construct()
	{
		$this->pathParams = new \Speakeasy\SpeakeasyClientSDK\models\operations\RunPluginPathParams();
		$this->queryParams = new \Speakeasy\SpeakeasyClientSDK\models\operations\RunPluginQueryParams();
	}
}
