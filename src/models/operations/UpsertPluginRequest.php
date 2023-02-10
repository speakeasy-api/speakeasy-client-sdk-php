<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;

use \Speakeasy\SpeakeasyClientSDK\utils\SpeakeasyMetadata;

class UpsertPluginRequest
{
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \Speakeasy\SpeakeasyClientSDK\models\shared\Plugin $request;
    
	public function __construct()
	{
		$this->request = new \Speakeasy\SpeakeasyClientSDK\models\shared\Plugin();
	}
}
