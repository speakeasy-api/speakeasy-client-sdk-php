<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;



class DownloadSchemaRevisionRequest
{
    public DownloadSchemaRevisionPathParams $pathParams;
    
	public function __construct()
	{
		$this->pathParams = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\DownloadSchemaRevisionPathParams();
	}
}
