<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;



class GenerateRequestPostmanCollectionRequest
{
    public GenerateRequestPostmanCollectionPathParams $pathParams;
    
	public function __construct()
	{
		$this->pathParams = new \Speakeasy\SpeakeasyClientSDK\models\operations\GenerateRequestPostmanCollectionPathParams();
	}
}
