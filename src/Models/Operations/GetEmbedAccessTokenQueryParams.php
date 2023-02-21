<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use \Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;

class GetEmbedAccessTokenQueryParams
{
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=description')]
    public ?string $description = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=duration')]
    public ?int $duration = null;
    
    #[SpeakeasyMetadata('queryParam:serialization=json,name=filters')]
    public ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\Filters $filters = null;
    
	public function __construct()
	{
		$this->description = null;
		$this->duration = null;
		$this->filters = null;
	}
}
