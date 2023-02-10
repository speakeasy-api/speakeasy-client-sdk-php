<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\operations;

use \Speakeasy\SpeakeasyClientSdkPhp\utils\SpeakeasyMetadata;

class UpsertApiRequest
{
    public \Speakeasy\SpeakeasyClientSdkPhp\models\operations\UpsertApiPathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \Speakeasy\SpeakeasyClientSdkPhp\models\shared\ApiInput $request;
    
	public function __construct()
	{
		$this->pathParams = new \Speakeasy\SpeakeasyClientSdkPhp\models\operations\UpsertApiPathParams();
		$this->request = new \Speakeasy\SpeakeasyClientSdkPhp\models\shared\ApiInput();
	}
}
