<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use \Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;

class GetAllApiVersionsQueryParams
{
    /**
     * @var ?array<string, array<string>>
     */
    #[SpeakeasyMetadata('queryParam:style=deepObject,explode=true,name=metadata')]
    public ?array $metadata = null;
    
    #[SpeakeasyMetadata('queryParam:style=deepObject,explode=true,name=op')]
    public ?GetAllApiVersionsOp $op = null;
    
	public function __construct()
	{
		$this->metadata = null;
		$this->op = null;
	}
}
