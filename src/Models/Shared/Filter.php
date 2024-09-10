<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** Filter - A filter is a key-value pair that can be used to filter a list of requests. */
class Filter
{
    /**
     * The key of the filter.
     *
     * @var string $key
     */
    #[\JMS\Serializer\Annotation\SerializedName('key')]
    public string $key;

    /**
     * The operator of the filter.
     *
     * @var string $operator
     */
    #[\JMS\Serializer\Annotation\SerializedName('operator')]
    public string $operator;

    /**
     * The value of the filter.
     *
     * @var string $value
     */
    #[\JMS\Serializer\Annotation\SerializedName('value')]
    public string $value;

    /**
     * @param  string  $key
     * @param  string  $operator
     * @param  string  $value
     */
    public function __construct(string $key, string $operator, string $value)
    {
        $this->key = $key;
        $this->operator = $operator;
        $this->value = $value;
    }
}