<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


class SuggestItemsRequestBody
{
    /**
     * The list of "things" to get suggestions for. One suggestion will be returned for each item in the list.
     *
     * @var array<string> $items
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('items')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>')]
    public array $items;

    /**
     * The prompt to use for the suggestion. Think of this as the "preamble".
     *
     * @var string $prompt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('prompt')]
    public string $prompt;

    /**
     * @param  array<string>  $items
     * @param  string  $prompt
     * @phpstan-pure
     */
    public function __construct(array $items, string $prompt)
    {
        $this->items = $items;
        $this->prompt = $prompt;
    }
}