<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use \Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class GetManifestRequest
{
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=namespace_name')]
    public string $namespaceName;
    
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=organization_slug')]
    public string $organizationSlug;
    
    /**
     * Tag or digest
     * 
     * @var string $revisionReference
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=revision_reference')]
    public string $revisionReference;
    
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=workspace_slug')]
    public string $workspaceSlug;
    
	public function __construct()
	{
		$this->namespaceName = "";
		$this->organizationSlug = "";
		$this->revisionReference = "";
		$this->workspaceSlug = "";
	}
}