<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


class Tag
{
    /**
     * Format {namespace_id}/{tag}
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * Human readable tag name
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     *
     * @var string $namespaceName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('namespace_name')]
    public string $namespaceName;

    /**
     *
     * @var string $revisionDigest
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('revision_digest')]
    public string $revisionDigest;

    /**
     * @param  string  $id
     * @param  string  $name
     * @param  string  $namespaceName
     * @param  string  $revisionDigest
     * @phpstan-pure
     */
    public function __construct(string $id, string $name, string $namespaceName, string $revisionDigest)
    {
        $this->id = $id;
        $this->name = $name;
        $this->namespaceName = $namespaceName;
        $this->revisionDigest = $revisionDigest;
    }
}