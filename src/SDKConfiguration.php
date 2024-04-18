<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK;

class SDKConfiguration
{
	public ?\GuzzleHttp\ClientInterface $defaultClient = null;
	public ?\GuzzleHttp\ClientInterface $securityClient = null;
	public ?Models\Shared\Security $security = null;
	public string $serverUrl = '';
	public string $server = '';
	public string $language = 'php';
	public string $openapiDocVersion = '0.4.0';
	public string $sdkVersion = '0.37.4';
	public string $genVersion = '2.308.2';
	public string $userAgent = 'speakeasy-sdk/php 0.37.4 2.308.2 0.4.0 speakeasy-api/speakeasy-client-sdk-php';
	/** @var array<string, array<string, array<string, mixed>>> */
	public ?array $globals = [
    	'parameters' => []
    ];

	public function getServerUrl(): string
	{
		
		if ($this->serverUrl !== '') {
			return $this->serverUrl;
		}
		if ($this->server === '') {
			$this->server = SDK::SERVER_PROD;
		}

		return SDK::SERVERS[$this->server];
	}
	
}