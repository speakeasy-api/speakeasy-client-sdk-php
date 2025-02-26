<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Models\Shared;
use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class DeleteBillingAddOnRequest
{
    /**
     * The specific add-on to delete.
     *
     * @var Shared\BillingAddOn $addOn
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=add_on')]
    public Shared\BillingAddOn $addOn;

    /**
     * @param  Shared\BillingAddOn  $addOn
     * @phpstan-pure
     */
    public function __construct(Shared\BillingAddOn $addOn)
    {
        $this->addOn = $addOn;
    }
}