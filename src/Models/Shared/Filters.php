<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** Filters - Filters are used to query requests. */
class Filters
{
    /**
     * A list of filters to apply to the query.
     *
     * @var array<\Speakeasy\SpeakeasyClientSDK\Models\Shared\Filter> $filters
     */
    #[\JMS\Serializer\Annotation\SerializedName('filters')]
    #[\JMS\Serializer\Annotation\Type('array<Speakeasy\SpeakeasyClientSDK\Models\Shared\Filter>')]
    public array $filters;

    /**
     * The maximum number of results to return.
     *
     * @var int $limit
     */
    #[\JMS\Serializer\Annotation\SerializedName('limit')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $limit;

    /**
     * The offset to start the query from.
     *
     * @var int $offset
     */
    #[\JMS\Serializer\Annotation\SerializedName('offset')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $offset;

    /**
     * The operator to use when combining filters.
     *
     * @var string $operator
     */
    #[\JMS\Serializer\Annotation\SerializedName('operator')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $operator;

    public function __construct()
    {
        $this->filters = [];
        $this->limit = 0;
        $this->offset = 0;
        $this->operator = '';
    }
}