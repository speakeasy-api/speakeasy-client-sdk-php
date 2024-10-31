<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** AccessToken - An AccessToken is a token that can be used to authenticate with the Speakeasy API. */
class AccessToken
{
    /**
     *
     * @var string $accessToken
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('access_token')]
    public string $accessToken;

    /**
     *
     * @var Claims $claims
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('claims')]
    #[\Speakeasy\Serializer\Annotation\Type('\Speakeasy\SpeakeasyClientSDK\Models\Shared\Claims')]
    public Claims $claims;

    /**
     * $featureFlags
     *
     * @var ?array<FeatureFlag> $featureFlags
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('feature_flags')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Speakeasy\SpeakeasyClientSDK\Models\Shared\FeatureFlag>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $featureFlags = null;

    /**
     *
     * @var AccessTokenUser $user
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('user')]
    #[\Speakeasy\Serializer\Annotation\Type('\Speakeasy\SpeakeasyClientSDK\Models\Shared\AccessTokenUser')]
    public AccessTokenUser $user;

    /**
     * $workspaces
     *
     * @var ?array<Workspaces> $workspaces
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('workspaces')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Speakeasy\SpeakeasyClientSDK\Models\Shared\Workspaces>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $workspaces = null;

    /**
     * @param  string  $accessToken
     * @param  Claims  $claims
     * @param  AccessTokenUser  $user
     * @param  ?array<FeatureFlag>  $featureFlags
     * @param  ?array<Workspaces>  $workspaces
     */
    public function __construct(string $accessToken, Claims $claims, AccessTokenUser $user, ?array $featureFlags = null, ?array $workspaces = null)
    {
        $this->accessToken = $accessToken;
        $this->claims = $claims;
        $this->user = $user;
        $this->featureFlags = $featureFlags;
        $this->workspaces = $workspaces;
    }
}