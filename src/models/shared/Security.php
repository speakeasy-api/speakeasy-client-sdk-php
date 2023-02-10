<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\shared;

use \Speakeasy\SpeakeasyClientSDK\utils\SpeakeasyMetadata;

class Security
{
    #[SpeakeasyMetadata('security:scheme=true,type=apiKey,subtype=header')]
    public \Speakeasy\SpeakeasyClientSDK\models\shared\SchemeAPIKey $apiKey;
    
	public function __construct()
	{
		$this->apiKey = new \Speakeasy\SpeakeasyClientSDK\models\shared\SchemeAPIKey();
	}
}
