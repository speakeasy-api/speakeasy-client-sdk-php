<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class SuggestOpenAPIRequest
{
    /**
     * The schema file to upload provided as a multipart/form-data file segment.
     *
     * @var SuggestOpenAPIRequestBody $requestBody
     */
    #[SpeakeasyMetadata('request:mediaType=multipart/form-data')]
    public SuggestOpenAPIRequestBody $requestBody;

    /**
     *
     * @var string $xSessionId
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-session-id')]
    public string $xSessionId;

    /**
     * @param  SuggestOpenAPIRequestBody  $requestBody
     * @param  string  $xSessionId
     * @phpstan-pure
     */
    public function __construct(SuggestOpenAPIRequestBody $requestBody, string $xSessionId)
    {
        $this->requestBody = $requestBody;
        $this->xSessionId = $xSessionId;
    }
}