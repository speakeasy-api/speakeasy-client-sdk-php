<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\operations;

use \Speakeasy\SpeakeasyClientSDK\utils\SpeakeasyMetadata;

class RevokeEmbedAccessTokenPathParams
{
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=tokenID')]
    public string $tokenID;
    
	public function __construct()
	{
		$this->tokenID = "";
	}
}
