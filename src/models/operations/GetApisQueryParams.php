<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\operations;

use \Speakeasy\SpeakeasyClientSdkPhp\utils\SpeakeasyMetadata;

class GetApisQueryParams
{
    /**
     * @var ?array<string, array<string>>
     */
    #[SpeakeasyMetadata('queryParam:style=deepObject,explode=true,name=metadata')]
    public ?array $metadata;
    
    #[SpeakeasyMetadata('queryParam:style=deepObject,explode=true,name=op')]
    public ?\Speakeasy\SpeakeasyClientSdkPhp\models\operations\GetApisOp $op;
    
	public function __construct()
	{
		$this->metadata = null;
		$this->op = null;
	}
}
