<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class LinkGithubAccessRequest
{
    /**
     *
     * @var ?string $githubOidcToken
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=github_oidc_token')]
    public ?string $githubOidcToken = null;

    /**
     *
     * @var ?string $githubOrg
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=github_org')]
    public ?string $githubOrg = null;

    /**
     *
     * @var ?string $installationId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=installation_id')]
    public ?string $installationId = null;

    /**
     * @param  ?string  $githubOidcToken
     * @param  ?string  $githubOrg
     * @param  ?string  $installationId
     */
    public function __construct(?string $githubOidcToken = null, ?string $githubOrg = null, ?string $installationId = null)
    {
        $this->githubOidcToken = $githubOidcToken;
        $this->githubOrg = $githubOrg;
        $this->installationId = $installationId;
    }
}