<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Models\Shared;
use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class GetEmbedAccessTokenRequest
{
    /**
     * The description of the embed access token.
     *
     * @var ?string $description
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=description')]
    public ?string $description = null;

    /**
     * The duration (in minutes) of the embed access token.
     *
     * @var ?int $duration
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=duration')]
    public ?int $duration = null;

    /**
     * The filter to apply to the query.
     *
     * @var ?Shared\Filters $filters
     */
    #[SpeakeasyMetadata('queryParam:serialization=json,name=filters')]
    public ?Shared\Filters $filters = null;

    /**
     * @param  ?string  $description
     * @param  ?int  $duration
     * @param  ?Shared\Filters  $filters
     */
    public function __construct(?string $description = null, ?int $duration = null, ?Shared\Filters $filters = null)
    {
        $this->description = $description;
        $this->duration = $duration;
        $this->filters = $filters;
    }
}