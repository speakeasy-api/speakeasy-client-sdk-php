<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\shared;

use \Speakeasy\SpeakeasyClientSdkPhp\utils\SpeakeasyMetadata;

class SchemeAPIKey
{
    #[SpeakeasyMetadata('security:name=x-api-key')]
    public string $apiKey;
    
	public function __construct()
	{
		$this->apiKey = "";
	}
}
