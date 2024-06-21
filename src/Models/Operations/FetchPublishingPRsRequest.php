<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class FetchPublishingPRsRequest
{
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=generate_gen_lock_id')]
    public string $generateGenLockId;

    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=org')]
    public string $org;

    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=repo')]
    public string $repo;

    public function __construct()
    {
        $this->generateGenLockId = '';
        $this->org = '';
        $this->repo = '';
    }
}