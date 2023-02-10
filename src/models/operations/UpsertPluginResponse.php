<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\operations;



class UpsertPluginResponse
{
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSdkPhp\models\shared\Error $error;
    
    public ?\Speakeasy\SpeakeasyClientSdkPhp\models\shared\Plugin $plugin;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->error = null;
		$this->plugin = null;
		$this->statusCode = 0;
	}
}
