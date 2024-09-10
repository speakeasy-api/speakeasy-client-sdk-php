<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
/** QueryParamOp - Configuration for filter operations */
class QueryParamOp
{
    /**
     * Whether to AND or OR the filters
     *
     * @var bool $and
     */
    #[SpeakeasyMetadata('queryParam:name=and')]
    public bool $and;

    /**
     * @param  bool  $and
     */
    public function __construct(bool $and)
    {
        $this->and = $and;
    }
}