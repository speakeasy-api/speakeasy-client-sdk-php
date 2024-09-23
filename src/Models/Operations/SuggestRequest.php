<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Models\Shared;
use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class SuggestRequest
{
    /**
     * The OAS summary and diagnostics to use for the suggestion.
     *
     * @var Shared\SuggestRequestBody $suggestRequestBody
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Shared\SuggestRequestBody $suggestRequestBody;

    /**
     *
     * @var string $xSessionId
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-session-id')]
    public string $xSessionId;

    /**
     * @param  Shared\SuggestRequestBody  $suggestRequestBody
     * @param  string  $xSessionId
     */
    public function __construct(Shared\SuggestRequestBody $suggestRequestBody, string $xSessionId)
    {
        $this->suggestRequestBody = $suggestRequestBody;
        $this->xSessionId = $xSessionId;
    }
}