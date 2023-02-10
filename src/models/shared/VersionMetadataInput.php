<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\shared;


/**
 * VersionMetadataInput
 * A set of keys and associated values, attached to a particular version of an Api.
 */
class VersionMetadataInput
{
    #[\JMS\Serializer\Annotation\SerializedName('meta_key')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $metaKey;
    
    #[\JMS\Serializer\Annotation\SerializedName('meta_value')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $metaValue;
    
	public function __construct()
	{
		$this->metaKey = "";
		$this->metaValue = "";
	}
}
