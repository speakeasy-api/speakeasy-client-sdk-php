<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


class GetNamespacesResponse
{
    /**
     * $items
     *
     * @var array<\Speakeasy\SpeakeasyClientSDK\Models\Shared\NamespaceT> $items
     */
    #[\JMS\Serializer\Annotation\SerializedName('items')]
    #[\JMS\Serializer\Annotation\Type('array<Speakeasy\SpeakeasyClientSDK\Models\Shared\NamespaceT>')]
    public array $items;

    public function __construct()
    {
        $this->items = [];
    }
}