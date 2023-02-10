<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\shared;

use \Speakeasy\SpeakeasyClientSDK\utils\SpeakeasyMetadata;

class SchemeAPIKey
{
    #[SpeakeasyMetadata('security:name=x-api-key')]
    public string $apiKey;
    
	public function __construct()
	{
		$this->apiKey = "";
	}
}
