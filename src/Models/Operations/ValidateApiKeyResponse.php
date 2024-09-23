<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Models\Errorors;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;
class ValidateApiKeyResponse
{
    /**
     * OK
     *
     * @var ?Shared\ApiKeyDetails $apiKeyDetails
     */
    public ?Shared\ApiKeyDetails $apiKeyDetails = null;

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
     * @param  string  $contentType
     * @param  int  $statusCode
     * @param  \Psr\Http\Message\ResponseInterface  $rawResponse
     * @param  ?Shared\ApiKeyDetails  $apiKeyDetails
     * @param  ?Errorors\Error  $error
     */
    public function __construct(string $contentType, int $statusCode, \Psr\Http\Message\ResponseInterface $rawResponse, ?Shared\ApiKeyDetails $apiKeyDetails = null, ?Errorors\Error $error = null)
    {
        $this->contentType = $contentType;
        $this->statusCode = $statusCode;
        $this->rawResponse = $rawResponse;
        $this->apiKeyDetails = $apiKeyDetails;
        $this->error = $error;
    }
}