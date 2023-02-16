<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;



class GeneratePostmanCollectionRequest
{
    public GeneratePostmanCollectionPathParams $pathParams;
    
	public function __construct()
	{
		$this->pathParams = new \Speakeasy\SpeakeasyClientSDK\models\operations\GeneratePostmanCollectionPathParams();
	}
}
