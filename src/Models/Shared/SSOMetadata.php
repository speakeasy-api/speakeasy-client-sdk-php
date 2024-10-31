<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** SSOMetadata - SSO metadata for a workspace */
class SSOMetadata
{
    /**
     *
     * @var bool $ssoActivated
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sso_activated')]
    public bool $ssoActivated;

    /**
     * $ssoDomains
     *
     * @var array<string> $ssoDomains
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sso_domains')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>')]
    public array $ssoDomains;

    /**
     * @param  bool  $ssoActivated
     * @param  array<string>  $ssoDomains
     */
    public function __construct(bool $ssoActivated, array $ssoDomains)
    {
        $this->ssoActivated = $ssoActivated;
        $this->ssoDomains = $ssoDomains;
    }
}