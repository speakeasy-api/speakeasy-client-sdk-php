<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;


class GetSchemaDiffResponse
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
     * @var ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\Error $error
     */
    public ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\Error $error = null;

    /**
     * OK
     *
     * @var ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\SchemaDiff $schemaDiff
     */
    public ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\SchemaDiff $schemaDiff = null;

    /**
     * HTTP response status code for this operation
     *
     * @var int $statusCode
     */
    public int $statusCode;

    /**
     * Raw HTTP response; suitable for custom response parsing
     *
     * @var ?\Psr\Http\Message\ResponseInterface $rawResponse
     */
    public ?\Psr\Http\Message\ResponseInterface $rawResponse;

    public function __construct()
    {
        $this->contentType = '';
        $this->error = null;
        $this->schemaDiff = null;
        $this->statusCode = 0;
        $this->rawResponse = null;
    }
}