<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** GithubMissingPublishingSecretsResponse - A valid response containing MISSING publishing secret keys for a github target */
class GithubMissingPublishingSecretsResponse
{
    /**
     * $missingSecrets
     *
     * @var ?array<string> $missingSecrets
     */
    #[\JMS\Serializer\Annotation\SerializedName('missing_secrets')]
    #[\JMS\Serializer\Annotation\Type('array<string>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $missingSecrets = null;

    /**
     * @param  ?array<string>  $missingSecrets
     */
    public function __construct(?array $missingSecrets = null)
    {
        $this->missingSecrets = $missingSecrets;
    }
}