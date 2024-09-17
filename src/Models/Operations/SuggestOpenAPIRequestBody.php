<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Models\Shared;
use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
/** SuggestOpenAPIRequestBody - The schema file to upload provided as a multipart/form-data file segment. */
class SuggestOpenAPIRequestBody
{
    /**
     *
     * @var ?Shared\SuggestOptsOld $opts
     */
    #[SpeakeasyMetadata('multipartForm:name=opts,json=true')]
    public ?Shared\SuggestOptsOld $opts = null;

    /**
     *
     * @var Schema $schema
     */
    #[SpeakeasyMetadata('multipartForm:file=true')]
    public Schema $schema;

    /**
     * @param  Schema  $schema
     * @param  ?Shared\SuggestOptsOld  $opts
     */
    public function __construct(Schema $schema, ?Shared\SuggestOptsOld $opts = null)
    {
        $this->schema = $schema;
        $this->opts = $opts;
    }
}