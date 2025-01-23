<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


class Revision
{
    /**
     *
     * @var \DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    public \DateTime $createdAt;

    /**
     *
     * @var string $digest
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('digest')]
    public string $digest;

    /**
     * Format {namespace_id}/{revision_digest}
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var string $namespaceName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('namespace_name')]
    public string $namespaceName;

    /**
     * $tags
     *
     * @var array<string> $tags
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tags')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>')]
    public array $tags;

    /**
     *
     * @var \DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    public \DateTime $updatedAt;

    /**
     *
     * @var ?RevisionContentsMetadata $contentsMetadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('contents_metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('\Speakeasy\SpeakeasyClientSDK\Models\Shared\RevisionContentsMetadata|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?RevisionContentsMetadata $contentsMetadata = null;

    /**
     * @param  \DateTime  $createdAt
     * @param  string  $digest
     * @param  string  $id
     * @param  string  $namespaceName
     * @param  array<string>  $tags
     * @param  \DateTime  $updatedAt
     * @param  ?RevisionContentsMetadata  $contentsMetadata
     */
    public function __construct(\DateTime $createdAt, string $digest, string $id, string $namespaceName, array $tags, \DateTime $updatedAt, ?RevisionContentsMetadata $contentsMetadata = null)
    {
        $this->createdAt = $createdAt;
        $this->digest = $digest;
        $this->id = $id;
        $this->namespaceName = $namespaceName;
        $this->tags = $tags;
        $this->updatedAt = $updatedAt;
        $this->contentsMetadata = $contentsMetadata;
    }
}