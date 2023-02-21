<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;



class GetPluginsResponse
{
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\Error $error = null;
    
    /**
     * @var ?array<\Speakeasy\SpeakeasyClientSDK\Models\Shared\Plugin>
     */
    public ?array $plugins = null;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->error = null;
		$this->plugins = null;
		$this->statusCode = 0;
	}
}
