<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** AddTags - Request body of tags to add to a revision */
class AddTags
{
    /**
     * revision digest to add tags too sha256:...
     *
     * @var string $revisionDigest
     */
    #[\JMS\Serializer\Annotation\SerializedName('revision_digest')]
    public string $revisionDigest;

    /**
     * string tags to add to the revision
     *
     * @var array<string> $tags
     */
    #[\JMS\Serializer\Annotation\SerializedName('tags')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    public array $tags;

    /**
     * @param  string  $revisionDigest
     * @param  array<string>  $tags
     */
    public function __construct(string $revisionDigest, array $tags)
    {
        $this->revisionDigest = $revisionDigest;
        $this->tags = $tags;
    }
}