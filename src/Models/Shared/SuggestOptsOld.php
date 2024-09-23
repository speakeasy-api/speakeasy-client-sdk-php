<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


class SuggestOptsOld
{
    /**
     * $diagnostics
     *
     * @var ?array<Diagnostic> $diagnostics
     */
    #[\JMS\Serializer\Annotation\SerializedName('diagnostics')]
    #[\JMS\Serializer\Annotation\Type('array<\Speakeasy\SpeakeasyClientSDK\Models\Shared\Diagnostic>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $diagnostics = null;

    /**
     *
     * @var SuggestionType $suggestionType
     */
    #[\JMS\Serializer\Annotation\SerializedName('suggestion_type')]
    #[\JMS\Serializer\Annotation\Type('\Speakeasy\SpeakeasyClientSDK\Models\Shared\SuggestionType')]
    public SuggestionType $suggestionType;

    /**
     * @param  SuggestionType  $suggestionType
     * @param  ?array<Diagnostic>  $diagnostics
     */
    public function __construct(SuggestionType $suggestionType, ?array $diagnostics = null)
    {
        $this->suggestionType = $suggestionType;
        $this->diagnostics = $diagnostics;
    }
}