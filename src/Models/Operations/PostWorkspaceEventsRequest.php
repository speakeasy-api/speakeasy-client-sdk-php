<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Models\Shared;
use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class PostWorkspaceEventsRequest
{
    /**
     * $requestBody
     *
     * @var array<Shared\CliEvent> $requestBody
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public array $requestBody;

    /**
     * Unique identifier of the workspace.
     *
     * @var ?string $workspaceID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=workspaceID')]
    public ?string $workspaceID = null;

    /**
     * @param  ?array<Shared\CliEvent>  $requestBody
     * @param  ?string  $workspaceID
     */
    public function __construct(?array $requestBody = null, ?string $workspaceID = null)
    {
        $this->requestBody = $requestBody;
        $this->workspaceID = $workspaceID;
    }
}