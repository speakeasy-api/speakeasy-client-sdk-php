<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


class UsageSnippets
{
    /**
     * $snippets
     *
     * @var array<UsageSnippet> $snippets
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('snippets')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Speakeasy\SpeakeasyClientSDK\Models\Shared\UsageSnippet>')]
    public array $snippets;

    /**
     * @param  array<UsageSnippet>  $snippets
     * @phpstan-pure
     */
    public function __construct(array $snippets)
    {
        $this->snippets = $snippets;
    }
}