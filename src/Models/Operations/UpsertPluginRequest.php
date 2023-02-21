<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use \Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;

class UpsertPluginRequest
{
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \Speakeasy\SpeakeasyClientSDK\Models\Shared\Plugin $request;
    
	public function __construct()
	{
		$this->request = new \Speakeasy\SpeakeasyClientSDK\Models\Shared\Plugin();
	}
}
