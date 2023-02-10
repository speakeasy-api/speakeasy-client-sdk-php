<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\operations;

use \Speakeasy\SpeakeasyClientSdkPhp\utils\SpeakeasyMetadata;

class UpsertPluginRequest
{
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \Speakeasy\SpeakeasyClientSdkPhp\models\shared\Plugin $request;
    
	public function __construct()
	{
		$this->request = new \Speakeasy\SpeakeasyClientSdkPhp\models\shared\Plugin();
	}
}
