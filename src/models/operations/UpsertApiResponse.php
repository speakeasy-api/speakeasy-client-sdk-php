<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;



class UpsertApiResponse
{
    public ?\Speakeasy\SpeakeasyClientSDK\models\shared\Api $api = null;
    
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSDK\models\shared\Error $error = null;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->api = null;
		$this->contentType = "";
		$this->error = null;
		$this->statusCode = 0;
	}
}
