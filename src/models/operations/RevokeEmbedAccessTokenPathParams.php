<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp\models\operations;

use \Speakeasy\SpeakeasyClientSdkPhp\utils\SpeakeasyMetadata;

class RevokeEmbedAccessTokenPathParams
{
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=tokenID')]
    public string $tokenID;
    
	public function __construct()
	{
		$this->tokenID = "";
	}
}
