<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK;



/**
 * SDK - Speakeasy API: The Subscriptions API manages subscriptions for CLI and registry events
 *
 * /docs - The Speakeasy Platform Documentation
 *
 * @see /docs
 */
class SDK
{
    public const SERVER_PROD = 'prod';

    public const SERVERS = [
        SDK::SERVER_PROD => 'https://api.prod.speakeasyapi.dev',
    ];

    /**
     * REST APIs for working with Registry artifacts
     *
     * @var Artifacts $$artifacts
     */
    public Artifacts $artifacts;

    /**
     * REST APIs for managing Authentication
     *
     * @var Auth $$auth
     */
    public Auth $auth;

    /**
     * REST APIs for retrieving Code Samples
     *
     * @var CodeSamples $$codeSamples
     */
    public CodeSamples $codeSamples;

    /**
     * REST APIs for managing the github integration
     *
     * @var Github $$github
     */
    public Github $github;

    /**
     * REST APIs for managing Organizations (speakeasy L1 Tenancy construct)
     *
     * @var Organizations $$organizations
     */
    public Organizations $organizations;

    /**
     * REST APIs for managing reports (lint reports, change reports, etc)
     *
     * @var Reports $$reports
     */
    public Reports $reports;

    /**
     * REST APIs for managing short URLs
     *
     * @var ShortURLs $$shortURLs
     */
    public ShortURLs $shortURLs;

    /**
     * REST APIs for managing subscriptions
     *
     * @var Subscriptions $$subscriptions
     */
    public Subscriptions $subscriptions;

    /**
     * REST APIs for managing LLM OAS suggestions
     *
     * @var Suggest $$suggest
     */
    public Suggest $suggest;

    /**
     * REST APIs for managing Workspaces (speakeasy tenancy)
     *
     * @var Workspaces $$workspaces
     */
    public Workspaces $workspaces;

    /**
     * REST APIs for managing events captured by a speakeasy binary (CLI, GitHub Action etc)
     *
     * @var Events $$events
     */
    public Events $events;

    /**
     * Returns a new instance of the SDK builder used to configure and create the SDK instance.
     *
     * @return SDKBuilder
     */
    public static function builder(): SDKBuilder
    {
        return new SDKBuilder();
    }

    /**
     * @param  SDKConfiguration  $sdkConfiguration
     */
    public function __construct(
        public SDKConfiguration $sdkConfiguration,
    ) {
        $this->artifacts = new Artifacts($this->sdkConfiguration);
        $this->auth = new Auth($this->sdkConfiguration);
        $this->codeSamples = new CodeSamples($this->sdkConfiguration);
        $this->github = new Github($this->sdkConfiguration);
        $this->organizations = new Organizations($this->sdkConfiguration);
        $this->reports = new Reports($this->sdkConfiguration);
        $this->shortURLs = new ShortURLs($this->sdkConfiguration);
        $this->subscriptions = new Subscriptions($this->sdkConfiguration);
        $this->suggest = new Suggest($this->sdkConfiguration);
        $this->workspaces = new Workspaces($this->sdkConfiguration);
        $this->events = new Events($this->sdkConfiguration);
        $this->sdkConfiguration->client = $this->sdkConfiguration->initHooks($this->sdkConfiguration->client);

    }
}