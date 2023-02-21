<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;



class RevokeEmbedAccessTokenRequest
{
    public RevokeEmbedAccessTokenPathParams $pathParams;
    
	public function __construct()
	{
		$this->pathParams = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\RevokeEmbedAccessTokenPathParams();
	}
}
