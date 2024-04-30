<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


class Report
{
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<Speakeasy\SpeakeasyClientSDK\Models\Shared\Type>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Type $type = null;
    
	public function __construct()
	{
		$this->type = null;
	}
}