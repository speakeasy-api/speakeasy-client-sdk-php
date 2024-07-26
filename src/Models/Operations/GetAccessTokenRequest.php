<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class GetAccessTokenRequest
{
    /**
     * The workspace ID
     *
     * @var string $workspaceId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=workspace_id')]
    public string $workspaceId;

    public function __construct()
    {
        $this->workspaceId = '';
    }
}