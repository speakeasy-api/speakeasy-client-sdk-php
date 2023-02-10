<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\shared;



class GenerateOpenApiSpecDiff
{
    #[\JMS\Serializer\Annotation\SerializedName('current_schema')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $currentSchema;
    
    #[\JMS\Serializer\Annotation\SerializedName('new_schema')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $newSchema;
    
	public function __construct()
	{
		$this->currentSchema = "";
		$this->newSchema = "";
	}
}
