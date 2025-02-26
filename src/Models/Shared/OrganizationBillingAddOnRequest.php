<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** OrganizationBillingAddOnRequest - A request to add billing add ons */
class OrganizationBillingAddOnRequest
{
    /**
     * $addOns
     *
     * @var array<BillingAddOn> $addOns
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('add_ons')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Speakeasy\SpeakeasyClientSDK\Models\Shared\BillingAddOn>')]
    public array $addOns;

    /**
     * @param  array<BillingAddOn>  $addOns
     * @phpstan-pure
     */
    public function __construct(array $addOns)
    {
        $this->addOns = $addOns;
    }
}