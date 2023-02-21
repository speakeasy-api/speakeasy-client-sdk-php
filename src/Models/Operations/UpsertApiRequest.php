<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use \Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;

class UpsertApiRequest
{
    public UpsertApiPathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \Speakeasy\SpeakeasyClientSDK\Models\Shared\ApiInput $request;
    
	public function __construct()
	{
		$this->pathParams = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\UpsertApiPathParams();
		$this->request = new \Speakeasy\SpeakeasyClientSDK\Models\Shared\ApiInput();
	}
}
