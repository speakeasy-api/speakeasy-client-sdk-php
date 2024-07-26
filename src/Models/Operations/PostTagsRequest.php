<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class PostTagsRequest
{
    /**
     * A JSON representation of the tags to add
     *
     * @var ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\AddTags $addTags
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\AddTags $addTags = null;

    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=namespace_name')]
    public string $namespaceName;

    public function __construct()
    {
        $this->addTags = null;
        $this->namespaceName = '';
    }
}