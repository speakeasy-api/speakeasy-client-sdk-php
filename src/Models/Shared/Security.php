<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;

use \Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;

class Security
{
    #[SpeakeasyMetadata('security:scheme=true,type=apiKey,subtype=header')]
    public SchemeAPIKey $apiKey;
    
	public function __construct()
	{
		$this->apiKey = new \Speakeasy\SpeakeasyClientSDK\Models\Shared\SchemeAPIKey();
	}
}
