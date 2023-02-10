<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;

use \Speakeasy\SpeakeasyClientSDK\utils\SpeakeasyMetadata;

class GetAllApiVersionsQueryParams
{
    /**
     * @var ?array<string, array<string>>
     */
    #[SpeakeasyMetadata('queryParam:style=deepObject,explode=true,name=metadata')]
    public ?array $metadata;
    
    #[SpeakeasyMetadata('queryParam:style=deepObject,explode=true,name=op')]
    public ?\Speakeasy\SpeakeasyClientSDK\models\operations\GetAllApiVersionsOp $op;
    
	public function __construct()
	{
		$this->metadata = null;
		$this->op = null;
	}
}
