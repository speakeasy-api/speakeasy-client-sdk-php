<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use \Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
/**
 * Op - Configuration for filter operations
 * 
 * @package Speakeasy\SpeakeasyClientSDK\Models\Operations
 * @access public
 */
class Op
{
    /**
     * Whether to AND or OR the filters
     * 
     * @var bool $and
     */
	#[SpeakeasyMetadata('queryParam:name=and')]
    public bool $and;
    
	public function __construct()
	{
		$this->and = false;
	}
}