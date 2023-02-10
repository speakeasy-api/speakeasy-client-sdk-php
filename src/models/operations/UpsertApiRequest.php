<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;

use \Speakeasy\SpeakeasyClientSDK\utils\SpeakeasyMetadata;

class UpsertApiRequest
{
    public \Speakeasy\SpeakeasyClientSDK\models\operations\UpsertApiPathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \Speakeasy\SpeakeasyClientSDK\models\shared\ApiInput $request;
    
	public function __construct()
	{
		$this->pathParams = new \Speakeasy\SpeakeasyClientSDK\models\operations\UpsertApiPathParams();
		$this->request = new \Speakeasy\SpeakeasyClientSDK\models\shared\ApiInput();
	}
}
