<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */


declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK;

/**
 * SDKBuilder is used to configure and build an instance of the SDK.
 * 
 * @package Speakeasy\SpeakeasyClientSDK
 */
class SDKBuilder
{
    public function __construct(
        private SDKConfiguration $sdkConfig = new SDKConfiguration(),
    ) {}

    /**
     * setClient allows setting a custom Guzzle client for the SDK to make requests with.
     *
     * @param \GuzzleHttp\ClientInterface $client
     * @return SDKBuilder
     */
    public function setClient(\GuzzleHttp\ClientInterface $client): SDKBuilder
    {
        $this->sdkConfig->defaultClient = $client;

        return $this;
    }
    
    /**
     * setSecurity is used to configure the security required for the SDK.
     *
     * @param Models\Shared\Security $security
     * @return SDKBuilder
     */
    public function setSecurity(Models\Shared\Security $security): SDKBuilder
    {
        $this->sdkConfig->security = $security;

        return $this;
    }
    
    /**
     * setServerUrl is used to configure the server URL for the SDK, and optionally template any parameters in the URL.
     *
     * @param string $serverUrl
     * @param array<string, string> $params
     * @return SDKBuilder
     */
    public function setServerUrl(string $serverUrl, ?array $params = null): SDKBuilder
    {
        $this->sdkConfig->serverUrl = Utils\Utils::templateUrl($serverUrl, $params);

        return $this;
    }
    
    /**
     * setServer is used to configure the server for the SDK
     *
     * @param string $server
     * @return SDKBuilder
     */
    public function setServer(string $server): SDKBuilder
    {
        $this->sdkConfig->server = $server;

        return $this;
    }
    
    
    
    /**
     * setWorkspaceID is used to configure the workspaceID parameter for the SDK.
     *
     * @param string $workspaceID
     * @return SDKBuilder
     */
    public function setWorkspaceID(string $workspaceID): SDKBuilder
    {
        if (!array_key_exists('pathParam', $this->sdkConfig->globals['parameters']))
        {
            $this->sdkConfig->globals['parameters']['pathParam'] = [];
        }

        $this->sdkConfig->globals['parameters']['pathParam']['workspaceID'] = $workspaceID;

        return $this;
    }
    
    /**
     * build is used to build the SDK with any of the configured options.
     *
     * @return SDK
     */
    public function build(): SDK
    {
		if ($this->sdkConfig->defaultClient === null) {
			$this->sdkConfig->defaultClient = new \GuzzleHttp\Client([
				'timeout' => 60,
			]);
		}
		if ($this->sdkConfig->security !== null) {
			$this->sdkConfig->securityClient = Utils\Utils::configureSecurityClient($this->sdkConfig->defaultClient, $this->sdkConfig->security);
		}
		
		if ($this->sdkConfig->securityClient === null) {
			$this->sdkConfig->securityClient = $this->sdkConfig->defaultClient;
		}

        return new SDK($this->sdkConfig);
    }
}