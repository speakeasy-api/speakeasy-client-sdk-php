<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;

use \Speakeasy\SpeakeasyClientSDK\utils\SpeakeasyMetadata;

class GetEmbedAccessTokenQueryParams
{
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=description')]
    public ?string $description;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=duration')]
    public ?int $duration;
    
    #[SpeakeasyMetadata('queryParam:serialization=json,name=filters')]
    public ?\Speakeasy\SpeakeasyClientSDK\models\shared\Filters $filters;
    
	public function __construct()
	{
		$this->description = null;
		$this->duration = null;
		$this->filters = null;
	}
}
