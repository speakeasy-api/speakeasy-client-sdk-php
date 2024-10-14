<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK;

class SDKConfiguration
{
    public ?\GuzzleHttp\ClientInterface $defaultClient = null;

    public ?\GuzzleHttp\ClientInterface $securityClient = null;

    public ?Models\Shared\Security $security = null;

    /** @var pure-Closure(): Models\Shared\Security */
    public ?\Closure $securitySource = null;

    public string $serverUrl = '';

    public string $server = '';

    public string $language = 'php';

    public string $openapiDocVersion = '0.4.0 .';

    public string $sdkVersion = '0.44.1';

    public string $genVersion = '2.438.3';

    public string $userAgent = 'speakeasy-sdk/php 0.44.1 2.438.3 0.4.0 . speakeasy-api/speakeasy-client-sdk-php';
    /** @var array<string, array<string, array<string, mixed>>> */
    public ?array $globals = [
        'parameters' => [],
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
    public function hasSecurity(): bool
    {
        return $this->security !== null || $this->securitySource !== null;
    }

    public function getSecurity(): ?Models\Shared\Security
    {
        if ($this->securitySource !== null) {
            $security = $this->securitySource->call($this);

            return $security;
        } else {
            return $this->security;
        }
    }
}