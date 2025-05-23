<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK;
use Speakeasy\SpeakeasyClientSDK\Utils\Retry\RetryConfig;

class SDKConfiguration
{
    public ?\GuzzleHttp\ClientInterface $client = null;

    public Hooks\SDKHooks $hooks;
    /** @var ?pure-Closure(): Models\Shared\Security */
    public ?\Closure $securitySource = null;
    public string $serverUrl = '';

    public string $server = '';

    public string $language = 'php';

    public string $openapiDocVersion = '0.4.0';

    public string $sdkVersion = '0.51.7';

    public string $genVersion = '2.597.9';

    public string $userAgent = 'speakeasy-sdk/php 0.51.7 2.597.9 0.4.0 ian-speakeasy/speakeasy-client-sdk-php';
    /** @var array<string, array<string, array<string, mixed>>> */
    public ?array $globals = [
        'parameters' => [],
    ];

    public ?RetryConfig $retryConfig = null;

    public function __construct()
    {
        $this->hooks = new Hooks\SDKHooks();
    }

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
    public function hasSecurity(): bool
    {
        return $this->securitySource !== null;
    }

    public function getSecurity(): ?Models\Shared\Security
    {
        return $this->securitySource->call($this);
    }

    /**
     * @return Utils\ServerDetails
     */
    public function getServerDetails(): Utils\ServerDetails
    {
        if ($this->serverUrl !== '') {
            return new Utils\ServerDetails(rtrim($this->serverUrl, '/'), []);
        }

        return new Utils\ServerDetails(SDK::SERVERS[$this->server], []);

    }

    public function getTemplatedServerUrl(): string
    {
        if ($this->serverUrl) {
            return Utils\Utils::templateUrl($this->serverUrl.trim('/'), []);
        }

        return Utils\Utils::templateUrl($this->getServerUrl(), []);
    }

    public function initHooks(\GuzzleHttp\ClientInterface $client): \GuzzleHttp\ClientInterface
    {
        $preHooksUrl = $this->getTemplatedServerUrl();
        $ret = $this->hooks->sdkInit($preHooksUrl, $client);
        if ($preHooksUrl != $ret->url) {
            $this->serverUrl = $ret->url;
        }

        return $ret->client;
    }
}
