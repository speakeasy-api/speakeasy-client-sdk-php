<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\shared;

use \Speakeasy\SpeakeasyClientSdkPhp\utils\SpeakeasyMetadata;

class Security
{
    #[SpeakeasyMetadata('security:scheme=true,type=apiKey,subtype=header')]
    public \Speakeasy\SpeakeasyClientSdkPhp\models\shared\SchemeAPIKey $apiKey;
    
	public function __construct()
	{
		$this->apiKey = new \Speakeasy\SpeakeasyClientSdkPhp\models\shared\SchemeAPIKey();
	}
}
