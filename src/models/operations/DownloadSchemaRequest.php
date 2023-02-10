<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;



class DownloadSchemaRequest
{
    public \Speakeasy\SpeakeasyClientSDK\models\operations\DownloadSchemaPathParams $pathParams;
    
	public function __construct()
	{
		$this->pathParams = new \Speakeasy\SpeakeasyClientSDK\models\operations\DownloadSchemaPathParams();
	}
}