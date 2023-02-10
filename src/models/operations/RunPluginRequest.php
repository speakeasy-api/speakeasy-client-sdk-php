<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\operations;



class RunPluginRequest
{
    public \Speakeasy\SpeakeasyClientSdkPhp\models\operations\RunPluginPathParams $pathParams;
    
    public \Speakeasy\SpeakeasyClientSdkPhp\models\operations\RunPluginQueryParams $queryParams;
    
	public function __construct()
	{
		$this->pathParams = new \Speakeasy\SpeakeasyClientSdkPhp\models\operations\RunPluginPathParams();
		$this->queryParams = new \Speakeasy\SpeakeasyClientSdkPhp\models\operations\RunPluginQueryParams();
	}
}
