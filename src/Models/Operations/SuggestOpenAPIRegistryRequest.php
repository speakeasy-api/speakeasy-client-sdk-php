<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Models\Shared;
use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class SuggestOpenAPIRegistryRequest
{
    /**
     *
     * @var string $namespaceName
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=namespace_name')]
    public string $namespaceName;

    /**
     * Tag or digest
     *
     * @var string $revisionReference
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=revision_reference')]
    public string $revisionReference;

    /**
     *
     * @var string $xSessionId
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-session-id')]
    public string $xSessionId;

    /**
     * Suggest options
     *
     * @var ?Shared\SuggestRequestBody $suggestRequestBody
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?Shared\SuggestRequestBody $suggestRequestBody = null;

    /**
     * @param  string  $namespaceName
     * @param  string  $revisionReference
     * @param  string  $xSessionId
     * @param  ?Shared\SuggestRequestBody  $suggestRequestBody
     * @phpstan-pure
     */
    public function __construct(string $namespaceName, string $revisionReference, string $xSessionId, ?Shared\SuggestRequestBody $suggestRequestBody = null)
    {
        $this->namespaceName = $namespaceName;
        $this->revisionReference = $revisionReference;
        $this->xSessionId = $xSessionId;
        $this->suggestRequestBody = $suggestRequestBody;
    }
}