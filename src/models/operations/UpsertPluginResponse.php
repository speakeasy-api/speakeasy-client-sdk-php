<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;



class UpsertPluginResponse
{
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSDK\models\shared\Error $error;
    
    public ?\Speakeasy\SpeakeasyClientSDK\models\shared\Plugin $plugin;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->error = null;
		$this->plugin = null;
		$this->statusCode = 0;
	}
}
