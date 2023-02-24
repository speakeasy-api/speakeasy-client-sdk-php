<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use \Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;

class RevokeEmbedAccessTokenPathParams
{
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=tokenID')]
    public string $tokenID;
    
	public function __construct()
	{
		$this->tokenID = "";
	}
}