<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/**
 * Error
 * The `Status` type defines a logical error model
 */
class Error
{
    #[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $message;
    
    #[\JMS\Serializer\Annotation\SerializedName('status_code')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $statusCode;
    
	public function __construct()
	{
		$this->message = "";
		$this->statusCode = 0;
	}
}
