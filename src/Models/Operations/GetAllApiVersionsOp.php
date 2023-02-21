<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use \Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;

class GetAllApiVersionsOp
{
    #[SpeakeasyMetadata('queryParam:name=and')]
    public bool $and;
    
	public function __construct()
	{
		$this->and = false;
	}
}
