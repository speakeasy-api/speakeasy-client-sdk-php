<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;


class GetCodeSamplePreviewAsyncResponse
{
    /**
     * Successfully returned codeSample overlay file
     *
     * @var ?string $twoHundredApplicationJsonBytes
     */
    public ?string $twoHundredApplicationJsonBytes = null;

    /**
     * Successfully returned codeSample overlay file
     *
     * @var ?string $twoHundredApplicationXYamlBytes
     */
    public ?string $twoHundredApplicationXYamlBytes = null;

    /**
     * Job is still in progress
     *
     * @var ?GetCodeSamplePreviewAsyncResponseBody $twoHundredAndTwoApplicationJsonObject
     */
    public ?GetCodeSamplePreviewAsyncResponseBody $twoHundredAndTwoApplicationJsonObject = null;

    /**
     * HTTP response content type for this operation
     *
     * @var string $contentType
     */
    public string $contentType;

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
     * @param  ?string  $twoHundredApplicationJsonBytes
     * @param  ?string  $twoHundredApplicationXYamlBytes
     * @param  ?GetCodeSamplePreviewAsyncResponseBody  $twoHundredAndTwoApplicationJsonObject
     */
    public function __construct(string $contentType, int $statusCode, \Psr\Http\Message\ResponseInterface $rawResponse, ?string $twoHundredApplicationJsonBytes = null, ?string $twoHundredApplicationXYamlBytes = null, ?GetCodeSamplePreviewAsyncResponseBody $twoHundredAndTwoApplicationJsonObject = null)
    {
        $this->contentType = $contentType;
        $this->statusCode = $statusCode;
        $this->rawResponse = $rawResponse;
        $this->twoHundredApplicationJsonBytes = $twoHundredApplicationJsonBytes;
        $this->twoHundredApplicationXYamlBytes = $twoHundredApplicationXYamlBytes;
        $this->twoHundredAndTwoApplicationJsonObject = $twoHundredAndTwoApplicationJsonObject;
    }
}