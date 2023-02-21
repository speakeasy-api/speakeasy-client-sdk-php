<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;



class GetVersionMetadataResponse
{
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\Error $error = null;
    
    public int $statusCode;
    
    /**
     * @var ?array<\Speakeasy\SpeakeasyClientSDK\Models\Shared\VersionMetadata>
     */
    public ?array $versionMetadata = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->error = null;
		$this->statusCode = 0;
		$this->versionMetadata = null;
	}
}
