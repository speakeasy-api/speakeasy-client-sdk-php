<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class GetWorkspaceTargetsDeprecatedRequest
{
    /**
     * Filter to only return targets with events created after this timestamp
     *
     * @var ?\DateTime $afterLastEventCreatedAt
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=after_last_event_created_at,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public ?\DateTime $afterLastEventCreatedAt = null;

    /**
     * Unique identifier of the workspace.
     *
     * @var ?string $workspaceId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=workspace_id')]
    public ?string $workspaceId = null;

    /**
     * @param  ?\DateTime  $afterLastEventCreatedAt
     * @param  ?string  $workspaceId
     * @phpstan-pure
     */
    public function __construct(?\DateTime $afterLastEventCreatedAt = null, ?string $workspaceId = null)
    {
        $this->afterLastEventCreatedAt = $afterLastEventCreatedAt;
        $this->workspaceId = $workspaceId;
    }
}