<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/**
 * Filter
 * A filter is a key-value pair that can be used to filter a list of requests.
 */
class Filter
{
    #[\JMS\Serializer\Annotation\SerializedName('key')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $key;
    
    #[\JMS\Serializer\Annotation\SerializedName('operator')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $operator;
    
    #[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $value;
    
	public function __construct()
	{
		$this->key = "";
		$this->operator = "";
		$this->value = "";
	}
}
