<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** GithubConfigureMintlifyRepoRequest - A request to configure a GitHub repository for mintlify */
class GithubConfigureMintlifyRepoRequest
{
    /**
     * The input OpenAPI document
     *
     * @var string $input
     */
    #[\JMS\Serializer\Annotation\SerializedName('input')]
    public string $input;

    /**
     * The GitHub organization name
     *
     * @var string $org
     */
    #[\JMS\Serializer\Annotation\SerializedName('org')]
    public string $org;

    /**
     * The overlays to apply
     *
     * @var array<string> $overlays
     */
    #[\JMS\Serializer\Annotation\SerializedName('overlays')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    public array $overlays;

    /**
     * The GitHub repository name
     *
     * @var string $repo
     */
    #[\JMS\Serializer\Annotation\SerializedName('repo')]
    public string $repo;

    /**
     * The subdirectory (location of mint.json)
     *
     * @var ?string $subdirectory
     */
    #[\JMS\Serializer\Annotation\SerializedName('subdirectory')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $subdirectory = null;

    /**
     * @param  string  $input
     * @param  string  $org
     * @param  array<string>  $overlays
     * @param  string  $repo
     * @param  ?string  $subdirectory
     */
    public function __construct(string $input, string $org, array $overlays, string $repo, ?string $subdirectory = null)
    {
        $this->input = $input;
        $this->org = $org;
        $this->overlays = $overlays;
        $this->repo = $repo;
        $this->subdirectory = $subdirectory;
    }
}