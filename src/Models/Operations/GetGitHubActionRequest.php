<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class GetGitHubActionRequest
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
     * The targetName of the workflow target.
     *
     * @var ?string $targetName
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=targetName')]
    public ?string $targetName = null;

    /**
     * @param  string  $org
     * @param  string  $repo
     * @param  ?string  $targetName
     * @phpstan-pure
     */
    public function __construct(string $org, string $repo, ?string $targetName = null)
    {
        $this->org = $org;
        $this->repo = $repo;
        $this->targetName = $targetName;
    }
}