<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;

use \Speakeasy\SpeakeasyClientSDK\utils\SpeakeasyMetadata;

class GetApisQueryParams
{
    /**
     * @var ?array<string, array<string>>
     */
    #[SpeakeasyMetadata('queryParam:style=deepObject,explode=true,name=metadata')]
    public ?array $metadata = null;
    
    #[SpeakeasyMetadata('queryParam:style=deepObject,explode=true,name=op')]
    public ?GetApisOp $op = null;
    
	public function __construct()
	{
		$this->metadata = null;
		$this->op = null;
	}
}
