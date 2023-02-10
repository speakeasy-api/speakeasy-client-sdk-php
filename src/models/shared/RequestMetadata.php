<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\shared;


/**
 * RequestMetadata
 * Key-Value pairs associated with a request
 */
class RequestMetadata
{
    #[\JMS\Serializer\Annotation\SerializedName('key')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $key;
    
    #[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $value;
    
	public function __construct()
	{
		$this->key = null;
		$this->value = null;
	}
}
