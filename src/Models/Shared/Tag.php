<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
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
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;

    /**
     * Human readable tag name
     *
     * @var string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;

    #[\JMS\Serializer\Annotation\SerializedName('namespace_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $namespaceName;

    #[\JMS\Serializer\Annotation\SerializedName('revision_digest')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $revisionDigest;

    public function __construct()
    {
        $this->id = '';
        $this->name = '';
        $this->namespaceName = '';
        $this->revisionDigest = '';
    }
}