<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\operations;

use \Speakeasy\SpeakeasyClientSdkPhp\utils\SpeakeasyMetadata;

class GetApisOp
{
    #[SpeakeasyMetadata('queryParam:name=and')]
    public bool $and;
    
	public function __construct()
	{
		$this->and = false;
	}
}
