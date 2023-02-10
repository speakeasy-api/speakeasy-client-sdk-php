<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\operations;



class GetPluginsResponse
{
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSdkPhp\models\shared\Error $error;
    
    /**
     * @var ?array<\Speakeasy\SpeakeasyClientSdkPhp\models\shared\Plugin>
     */
    public ?array $plugins;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->error = null;
		$this->plugins = null;
		$this->statusCode = 0;
	}
}
