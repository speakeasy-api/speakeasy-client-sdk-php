<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Models\Shared;
use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class SuggestOperationIDsRegistryRequest
{
    /**
     * The schema file to upload provided as a multipart/form-data file segment.
     *
     * @var ?Shared\SuggestOperationIDsOpts $suggestOperationIDsOpts
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?Shared\SuggestOperationIDsOpts $suggestOperationIDsOpts = null;

    /**
     * Max number of suggestions to request
     *
     * @var ?float $limit
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?float $limit = null;

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
     * @param  ?string  $namespaceName
     * @param  ?string  $revisionReference
     * @param  ?string  $xSessionId
     * @param  ?Shared\SuggestOperationIDsOpts  $suggestOperationIDsOpts
     * @param  ?float  $limit
     */
    public function __construct(?string $namespaceName = null, ?string $revisionReference = null, ?string $xSessionId = null, ?Shared\SuggestOperationIDsOpts $suggestOperationIDsOpts = null, ?float $limit = null)
    {
        $this->namespaceName = $namespaceName;
        $this->revisionReference = $revisionReference;
        $this->xSessionId = $xSessionId;
        $this->suggestOperationIDsOpts = $suggestOperationIDsOpts;
        $this->limit = $limit;
    }
}