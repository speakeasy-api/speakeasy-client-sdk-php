<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;

use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class Security
{
    /**
     *
     * @var ?string $apiKey
     */
    #[SpeakeasyMetadata('security:scheme=true,type=apiKey,subtype=header,name=x-api-key')]
    public ?string $apiKey = null;

    /**
     *
     * @var ?string $bearer
     */
    #[SpeakeasyMetadata('security:scheme=true,type=http,subtype=bearer,name=Authorization')]
    public ?string $bearer = null;

    /**
     *
     * @var ?string $workspaceIdentifier
     */
    #[SpeakeasyMetadata('security:scheme=true,type=apiKey,subtype=header,name=x-workspace-identifier')]
    public ?string $workspaceIdentifier = null;

    /**
     * @param  ?string  $apiKey
     * @param  ?string  $bearer
     * @param  ?string  $workspaceIdentifier
     * @phpstan-pure
     */
    public function __construct(?string $apiKey = null, ?string $bearer = null, ?string $workspaceIdentifier = null)
    {
        $this->apiKey = $apiKey;
        $this->bearer = $bearer;
        $this->workspaceIdentifier = $workspaceIdentifier;
    }
}