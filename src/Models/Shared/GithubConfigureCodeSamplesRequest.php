<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** GithubConfigureCodeSamplesRequest - A request to configure GitHub code samples */
class GithubConfigureCodeSamplesRequest
{
    /**
     * The GitHub organization name
     *
     * @var string $org
     */
    #[\JMS\Serializer\Annotation\SerializedName('org')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $org;

    /**
     * The GitHub repository name
     *
     * @var string $repo
     */
    #[\JMS\Serializer\Annotation\SerializedName('repo')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $repo;

    /**
     * The target name for the code samples
     *
     * @var string $targetName
     */
    #[\JMS\Serializer\Annotation\SerializedName('targetName')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $targetName;

    public function __construct()
    {
        $this->org = '';
        $this->repo = '';
        $this->targetName = '';
    }
}