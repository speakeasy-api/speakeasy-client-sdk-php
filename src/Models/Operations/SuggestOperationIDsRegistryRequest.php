<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class SuggestOperationIDsRegistryRequest
{
    /**
     * The schema file to upload provided as a multipart/form-data file segment.
     *
     * @var ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\SuggestOperationIDsOpts $suggestOperationIDsOpts
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\SuggestOperationIDsOpts $suggestOperationIDsOpts = null;

    /**
     * Max number of suggestions to request
     *
     * @var ?float $limit
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?float $limit = null;

    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=namespace_name')]
    public string $namespaceName;

    /**
     * Tag or digest
     *
     * @var string $revisionReference
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=revision_reference')]
    public string $revisionReference;

    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-session-id')]
    public string $xSessionId;

    public function __construct()
    {
        $this->suggestOperationIDsOpts = null;
        $this->limit = null;
        $this->namespaceName = '';
        $this->revisionReference = '';
        $this->xSessionId = '';
    }
}