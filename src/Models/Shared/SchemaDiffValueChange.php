<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;



class SchemaDiffValueChange
{
    #[\JMS\Serializer\Annotation\SerializedName('From')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $from;
    
    #[\JMS\Serializer\Annotation\SerializedName('To')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $to;
    
	public function __construct()
	{
		$this->from = "";
		$this->to = "";
	}
}
