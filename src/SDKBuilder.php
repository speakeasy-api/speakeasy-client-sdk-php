<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK;

class SDKBuilder
{
    private ?\GuzzleHttp\ClientInterface $client;
    private ?Models\Shared\Security $security;
    private string $serverUrl;
    /** @var array<string, string> */
    private ?array $params;

    public function __construct() {
        $this->client = null;
        $this->security = null;
        $this->serverUrl = '';
        $this->params = null;
    }

    public function setClient(\GuzzleHttp\ClientInterface $client): SDKBuilder
    {
        $this->client = $client;
        return $this;
    }
    
    public function setSecurity(Models\Shared\Security $security): SDKBuilder
    {
        $this->security = $security;
        return $this;
    }
    
    /**
    * Set the server URL and any parameters to interpolate into the URL.
    * @param string $serverUrl
    * @param array<string, string> $params
    * @return SDKBuilder
    */
    public function setServerURL(string $serverUrl, ?array $params = null): SDKBuilder
    {
        $this->serverUrl = $serverUrl;
        if ($params !== null) {
            $this->params = $params;
        }
        return $this;
    }
    
    /**
    * Set the server and any parameters to interpolate into the chosen server URL.
    * @param string $server
    * @param array<string, string> $params
    * @return SDKBuilder
    */
    public function setServer(string $server, ?array $params = null): SDKBuilder
    {
        $this->serverUrl = SDK::SERVERS[$server];
        if ($params !== null) {
            $this->params = $params;
        }
        return $this;
    }
    
    public function build(): SDK
    {
        return new SDK($this->client, $this->security, $this->serverUrl, $this->params);
    }
}