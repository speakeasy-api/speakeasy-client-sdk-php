<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;



class DownloadSchemaRevisionRequest
{
    public DownloadSchemaRevisionPathParams $pathParams;
    
	public function __construct()
	{
		$this->pathParams = new \Speakeasy\SpeakeasyClientSDK\models\operations\DownloadSchemaRevisionPathParams();
	}
}
