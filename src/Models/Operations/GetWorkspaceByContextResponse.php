<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Models\Errorors;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;
class GetWorkspaceByContextResponse
{
    /**
     * HTTP response content type for this operation
     *
     * @var string $contentType
     */
    public string $contentType;

    /**
     * Default error response
     *
     * @var ?Errorors\Error $error
     */
    public ?Errorors\Error $error = null;

    /**
     * HTTP response status code for this operation
     *
     * @var int $statusCode
     */
    public int $statusCode;

    /**
     * Raw HTTP response; suitable for custom response parsing
     *
     * @var \Psr\Http\Message\ResponseInterface $rawResponse
     */
    public \Psr\Http\Message\ResponseInterface $rawResponse;

    /**
     * OK
     *
     * @var ?Shared\WorkspaceAndOrganization $workspaceAndOrganization
     */
    public ?Shared\WorkspaceAndOrganization $workspaceAndOrganization = null;

    /**
     * @param  string  $contentType
     * @param  int  $statusCode
     * @param  \Psr\Http\Message\ResponseInterface  $rawResponse
     * @param  ?Errorors\Error  $error
     * @param  ?Shared\WorkspaceAndOrganization  $workspaceAndOrganization
     */
    public function __construct(string $contentType, int $statusCode, \Psr\Http\Message\ResponseInterface $rawResponse, ?Errorors\Error $error = null, ?Shared\WorkspaceAndOrganization $workspaceAndOrganization = null)
    {
        $this->contentType = $contentType;
        $this->statusCode = $statusCode;
        $this->rawResponse = $rawResponse;
        $this->error = $error;
        $this->workspaceAndOrganization = $workspaceAndOrganization;
    }
}