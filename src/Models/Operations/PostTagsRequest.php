<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Models\Shared;
use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class PostTagsRequest
{
    /**
     *
     * @var string $namespaceName
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=namespace_name')]
    public string $namespaceName;

    /**
     * A JSON representation of the tags to add
     *
     * @var ?Shared\AddTags $addTags
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?Shared\AddTags $addTags = null;

    /**
     * @param  string  $namespaceName
     * @param  ?Shared\AddTags  $addTags
     * @phpstan-pure
     */
    public function __construct(string $namespaceName, ?Shared\AddTags $addTags = null)
    {
        $this->namespaceName = $namespaceName;
        $this->addTags = $addTags;
    }
}