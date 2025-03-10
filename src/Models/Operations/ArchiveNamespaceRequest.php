<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class ArchiveNamespaceRequest
{
    /**
     *
     * @var string $namespaceName
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=namespace_name')]
    public string $namespaceName;

    /**
     * Archived status
     *
     * @var ?ArchiveNamespaceRequestBody $requestBody
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?ArchiveNamespaceRequestBody $requestBody = null;

    /**
     * @param  string  $namespaceName
     * @param  ?ArchiveNamespaceRequestBody  $requestBody
     * @phpstan-pure
     */
    public function __construct(string $namespaceName, ?ArchiveNamespaceRequestBody $requestBody = null)
    {
        $this->namespaceName = $namespaceName;
        $this->requestBody = $requestBody;
    }
}