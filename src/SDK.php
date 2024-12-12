<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK;

use Speakeasy\Serializer\DeserializationContext;
use Speakeasy\SpeakeasyClientSDK\Hooks\HookContext;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Models\Shared;

/**
 * SDK - Speakeasy API: The Subscriptions API manages subscriptions for CLI and registry events
 *
 * /docs - The Speakeasy Platform Documentation
 *
 * @see /docs
 */
class SDK
{
    public const SERVER_PROD = 'prod';

    public const SERVERS = [
        SDK::SERVER_PROD => 'https://api.prod.speakeasyapi.dev',
    ];

    /**
     * REST APIs for working with Registry artifacts
     *
     * @var Artifacts $$artifacts
     */
    public Artifacts $artifacts;

    /**
     * REST APIs for managing Authentication
     *
     * @var Auth $$auth
     */
    public Auth $auth;

    /**
     * REST APIs for managing the github integration
     *
     * @var Github $$github
     */
    public Github $github;

    /**
     * REST APIs for managing Organizations (speakeasy L1 Tenancy construct)
     *
     * @var Organizations $$organizations
     */
    public Organizations $organizations;

    /**
     * REST APIs for managing reports (lint reports, change reports, etc)
     *
     * @var Reports $$reports
     */
    public Reports $reports;

    /**
     * REST APIs for managing short URLs
     *
     * @var ShortURLs $$shortURLs
     */
    public ShortURLs $shortURLs;

    /**
     * REST APIs for managing subscriptions
     *
     * @var Subscriptions $$subscriptions
     */
    public Subscriptions $subscriptions;

    /**
     * REST APIs for managing LLM OAS suggestions
     *
     * @var Suggest $$suggest
     */
    public Suggest $suggest;

    /**
     * REST APIs for managing Workspaces (speakeasy tenancy)
     *
     * @var Workspaces $$workspaces
     */
    public Workspaces $workspaces;

    /**
     * REST APIs for managing events captured by a speakeasy binary (CLI, GitHub Action etc)
     *
     * @var Events $$events
     */
    public Events $events;

    /**
     * Returns a new instance of the SDK builder used to configure and create the SDK instance.
     *
     * @return SDKBuilder
     */
    public static function builder(): SDKBuilder
    {
        return new SDKBuilder();
    }

    /**
     * @param  SDKConfiguration  $sdkConfiguration
     */
    public function __construct(
        public SDKConfiguration $sdkConfiguration,
    ) {
        $this->artifacts = new Artifacts($this->sdkConfiguration);
        $this->auth = new Auth($this->sdkConfiguration);
        $this->github = new Github($this->sdkConfiguration);
        $this->organizations = new Organizations($this->sdkConfiguration);
        $this->reports = new Reports($this->sdkConfiguration);
        $this->shortURLs = new ShortURLs($this->sdkConfiguration);
        $this->subscriptions = new Subscriptions($this->sdkConfiguration);
        $this->suggest = new Suggest($this->sdkConfiguration);
        $this->workspaces = new Workspaces($this->sdkConfiguration);
        $this->events = new Events($this->sdkConfiguration);
        $this->sdkConfiguration->client = $this->sdkConfiguration->initHooks($this->sdkConfiguration->client);

    }

    /**
     * Generate Code Sample previews from a file and configuration parameters.
     *
     * This endpoint generates Code Sample previews from a file and configuration parameters.
     *
     * @param  Shared\CodeSampleSchemaInput  $request
     * @return Operations\GenerateCodeSamplePreviewResponse
     * @throws \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException
     */
    public function generateCodeSamplePreview(Shared\CodeSampleSchemaInput $request): Operations\GenerateCodeSamplePreviewResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/code_sample/preview');
        $urlOverride = null;
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'request', 'multipart');
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json;q=1, application/x-yaml;q=0';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('POST', $url);
        $hookContext = new HookContext('generateCodeSamplePreview', null, $this->sdkConfiguration->securitySource);
        $httpRequest = $this->sdkConfiguration->hooks->beforeRequest(new Hooks\BeforeRequestContext($hookContext), $httpRequest);
        $options = Utils\Utils::convertHeadersToOptions($httpRequest, $options);
        $httpRequest = Utils\Utils::removeHeaders($httpRequest);
        try {
            $httpResponse = $this->sdkConfiguration->client->send($httpRequest, $options);
        } catch (\GuzzleHttp\Exception\GuzzleException $error) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), null, $error);
            if ($res !== null) {
                $httpResponse = $res;
            }
        }
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), $httpResponse, null);
            if ($res !== null) {
                $httpResponse = $res;
            }
        }
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $obj = $httpResponse->getBody()->getContents();

                return new Operations\GenerateCodeSamplePreviewResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    twoHundredApplicationJsonBytes: $obj);
            } elseif (Utils\Utils::matchContentType($contentType, 'application/x-yaml')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $obj = $httpResponse->getBody()->getContents();

                return new Operations\GenerateCodeSamplePreviewResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    twoHundredApplicationXYamlBytes: $obj);
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Speakeasy\SpeakeasyClientSDK\Models\Errorors\Error', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } else {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Initiate asynchronous Code Sample preview generation from a file and configuration parameters, receiving an async JobID response for polling.
     *
     * This endpoint generates Code Sample previews from a file and configuration parameters, receiving an async JobID response for polling.
     *
     * @param  Shared\CodeSampleSchemaInput  $request
     * @return Operations\GenerateCodeSamplePreviewAsyncResponse
     * @throws \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException
     */
    public function generateCodeSamplePreviewAsync(Shared\CodeSampleSchemaInput $request): Operations\GenerateCodeSamplePreviewAsyncResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/code_sample/preview/async');
        $urlOverride = null;
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'request', 'multipart');
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('POST', $url);
        $hookContext = new HookContext('generateCodeSamplePreviewAsync', null, $this->sdkConfiguration->securitySource);
        $httpRequest = $this->sdkConfiguration->hooks->beforeRequest(new Hooks\BeforeRequestContext($hookContext), $httpRequest);
        $options = Utils\Utils::convertHeadersToOptions($httpRequest, $options);
        $httpRequest = Utils\Utils::removeHeaders($httpRequest);
        try {
            $httpResponse = $this->sdkConfiguration->client->send($httpRequest, $options);
        } catch (\GuzzleHttp\Exception\GuzzleException $error) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), null, $error);
            if ($res !== null) {
                $httpResponse = $res;
            }
        }
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), $httpResponse, null);
            if ($res !== null) {
                $httpResponse = $res;
            }
        }
        if ($statusCode == 202) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Speakeasy\SpeakeasyClientSDK\Models\Operations\GenerateCodeSamplePreviewAsyncResponseBody', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GenerateCodeSamplePreviewAsyncResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    object: $obj);

                return $response;
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Speakeasy\SpeakeasyClientSDK\Models\Errorors\Error', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } else {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Poll for the result of an asynchronous Code Sample preview generation.
     *
     * Poll for the result of an asynchronous Code Sample preview generation.
     *
     * @param  Operations\GetCodeSamplePreviewAsyncRequest  $request
     * @return Operations\GetCodeSamplePreviewAsyncResponse
     * @throws \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException
     */
    public function getCodeSamplePreviewAsync(Operations\GetCodeSamplePreviewAsyncRequest $request): Operations\GetCodeSamplePreviewAsyncResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/code_sample/preview/async/{jobID}', Operations\GetCodeSamplePreviewAsyncRequest::class, $request, $this->sdkConfiguration->globals);
        $urlOverride = null;
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json;q=1, application/x-yaml;q=0';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);
        $hookContext = new HookContext('getCodeSamplePreviewAsync', null, $this->sdkConfiguration->securitySource);
        $httpRequest = $this->sdkConfiguration->hooks->beforeRequest(new Hooks\BeforeRequestContext($hookContext), $httpRequest);
        $options = Utils\Utils::convertHeadersToOptions($httpRequest, $options);
        $httpRequest = Utils\Utils::removeHeaders($httpRequest);
        try {
            $httpResponse = $this->sdkConfiguration->client->send($httpRequest, $options);
        } catch (\GuzzleHttp\Exception\GuzzleException $error) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), null, $error);
            if ($res !== null) {
                $httpResponse = $res;
            }
        }
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), $httpResponse, null);
            if ($res !== null) {
                $httpResponse = $res;
            }
        }
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $obj = $httpResponse->getBody()->getContents();

                return new Operations\GetCodeSamplePreviewAsyncResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    twoHundredApplicationJsonBytes: $obj);
            } elseif (Utils\Utils::matchContentType($contentType, 'application/x-yaml')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $obj = $httpResponse->getBody()->getContents();

                return new Operations\GetCodeSamplePreviewAsyncResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    twoHundredApplicationXYamlBytes: $obj);
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 202) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetCodeSamplePreviewAsyncResponseBody', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetCodeSamplePreviewAsyncResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    twoHundredAndTwoApplicationJsonObject: $obj);

                return $response;
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Speakeasy\SpeakeasyClientSDK\Models\Errorors\Error', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } else {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }
}