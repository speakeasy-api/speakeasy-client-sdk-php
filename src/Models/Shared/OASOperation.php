<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


class OASOperation
{
    /**
     *
     * @var string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    public string $description;

    /**
     *
     * @var string $method
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('method')]
    public string $method;

    /**
     *
     * @var string $operationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('operation_id')]
    public string $operationId;

    /**
     *
     * @var string $path
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('path')]
    public string $path;

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
     * @var ?string $groupOverride
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('group_override')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $groupOverride = null;

    /**
     *
     * @var ?string $methodNameOverride
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('method_name_override')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $methodNameOverride = null;

    /**
     * @param  string  $description
     * @param  string  $method
     * @param  string  $operationId
     * @param  string  $path
     * @param  array<string>  $tags
     * @param  ?string  $groupOverride
     * @param  ?string  $methodNameOverride
     * @phpstan-pure
     */
    public function __construct(string $description, string $method, string $operationId, string $path, array $tags, ?string $groupOverride = null, ?string $methodNameOverride = null)
    {
        $this->description = $description;
        $this->method = $method;
        $this->operationId = $operationId;
        $this->path = $path;
        $this->tags = $tags;
        $this->groupOverride = $groupOverride;
        $this->methodNameOverride = $methodNameOverride;
    }
}