<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class GetWorkspaceTokensRequest
{
    /**
     * Unique identifier of the workspace.
     *
     * @var ?string $workspaceId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=workspace_id')]
    public ?string $workspaceId = null;

    /**
     * @param  ?string  $workspaceId
     * @phpstan-pure
     */
    public function __construct(?string $workspaceId = null)
    {
        $this->workspaceId = $workspaceId;
    }
}