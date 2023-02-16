<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;



class GetVersionMetadataResponse
{
    public string $contentType;
    
    public ?\Speakeasy\SpeakeasyClientSDK\models\shared\Error $error = null;
    
    public int $statusCode;
    
    /**
     * @var ?array<\Speakeasy\SpeakeasyClientSDK\models\shared\VersionMetadata>
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
