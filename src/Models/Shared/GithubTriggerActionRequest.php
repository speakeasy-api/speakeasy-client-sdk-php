<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** GithubTriggerActionRequest - A request to trigger an action on a GitHub target */
class GithubTriggerActionRequest
{
    /**
     * The generation lock ID
     *
     * @var string $genLockId
     */
    #[\JMS\Serializer\Annotation\SerializedName('gen_lock_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $genLockId;

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
     * @var string $repoName
     */
    #[\JMS\Serializer\Annotation\SerializedName('repo_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $repoName;

    /**
     * A version to override the SDK too in workflow dispatch
     *
     * @var ?string $setVersion
     */
    #[\JMS\Serializer\Annotation\SerializedName('set_version')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $setVersion = null;

    /**
     * The target name for the action
     *
     * @var ?string $targetName
     */
    #[\JMS\Serializer\Annotation\SerializedName('target_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $targetName = null;

    public function __construct()
    {
        $this->genLockId = '';
        $this->org = '';
        $this->repoName = '';
        $this->setVersion = null;
        $this->targetName = null;
    }
}