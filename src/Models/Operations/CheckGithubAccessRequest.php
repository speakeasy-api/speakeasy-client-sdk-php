<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class CheckGithubAccessRequest
{
    /**
     *
     * @var string $org
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=org')]
    public string $org;

    /**
     *
     * @var string $repo
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=repo')]
    public string $repo;

    /**
     * @param  string  $org
     * @param  string  $repo
     * @phpstan-pure
     */
    public function __construct(string $org, string $repo)
    {
        $this->org = $org;
        $this->repo = $repo;
    }
}