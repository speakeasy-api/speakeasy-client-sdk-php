<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\shared;


/**
 * ApiInput
 * An Api is representation of a API (a collection of API Endpoints) within the Speakeasy Platform.
 */
class ApiInput
{
    #[\JMS\Serializer\Annotation\SerializedName('api_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $apiId;
    
    #[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $description;
    
    /**
     * @var ?array<string, array<string>>
     */
    #[\JMS\Serializer\Annotation\SerializedName('meta_data')]
    #[\JMS\Serializer\Annotation\Type('array<string, array<string>>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $metaData;
    
    #[\JMS\Serializer\Annotation\SerializedName('version_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $versionId;
    
	public function __construct()
	{
		$this->apiId = "";
		$this->description = "";
		$this->metaData = null;
		$this->versionId = "";
	}
}
