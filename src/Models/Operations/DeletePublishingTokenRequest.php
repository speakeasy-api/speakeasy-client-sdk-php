<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class DeletePublishingTokenRequest
{
    /**
     * Unique identifier of the publishing token.
     *
     * @var string $tokenID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=tokenID')]
    public string $tokenID;

    /**
     * @param  string  $tokenID
     * @phpstan-pure
     */
    public function __construct(string $tokenID)
    {
        $this->tokenID = $tokenID;
    }
}