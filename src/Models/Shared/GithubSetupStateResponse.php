<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** GithubSetupStateResponse - The state of a particular SDK targets github setup */
class GithubSetupStateResponse
{
    /**
     *
     * @var Actions $actions
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('actions')]
    #[\Speakeasy\Serializer\Annotation\Type('\Speakeasy\SpeakeasyClientSDK\Models\Shared\Actions')]
    public Actions $actions;

    /**
     *
     * @var bool $appInstalled
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('app_installed')]
    public bool $appInstalled;

    /**
     *
     * @var Secrets $secrets
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('secrets')]
    #[\Speakeasy\Serializer\Annotation\Type('\Speakeasy\SpeakeasyClientSDK\Models\Shared\Secrets')]
    public Secrets $secrets;

    /**
     * @param  Actions  $actions
     * @param  bool  $appInstalled
     * @param  Secrets  $secrets
     */
    public function __construct(Actions $actions, bool $appInstalled, Secrets $secrets)
    {
        $this->actions = $actions;
        $this->appInstalled = $appInstalled;
        $this->secrets = $secrets;
    }
}