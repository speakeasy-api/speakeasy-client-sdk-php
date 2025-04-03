<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK;

use Speakeasy\Serializer\DeserializationContext;
use Speakeasy\SpeakeasyClientSDK\Hooks\HookContext;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;
use Speakeasy\SpeakeasyClientSDK\Utils\Options;
use Speakeasy\SpeakeasyClientSDK\Utils\Retry;
use Speakeasy\SpeakeasyClientSDK\Utils\Retry\RetryUtils;

class Events
{
    private SDKConfiguration $sdkConfiguration;
    /**
     * @param  SDKConfiguration  $sdkConfig
     */
    public function __construct(public SDKConfiguration $sdkConfig)
    {
        $this->sdkConfiguration = $sdkConfig;
    }
    /**
     * @param  string  $baseUrl
     * @param  array<string, string>  $urlVariables
     *
     * @return string
     */
    public function getUrl(string $baseUrl, array $urlVariables): string
    {
        $serverDetails = $this->sdkConfiguration->getServerDetails();

        if ($baseUrl == null) {
            $baseUrl = $serverDetails->baseUrl;
        }

        if ($urlVariables == null) {
            $urlVariables = $serverDetails->options;
        }

        return Utils\Utils::templateUrl($baseUrl, $urlVariables);
    }

    /**
     * Load recent events for a particular workspace
     *
     * @param  Operations\GetWorkspaceEventsByTargetRequest  $request
     * @return Operations\GetWorkspaceEventsByTargetResponse
     * @throws \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKExceptioon
     */
    public function getEventsByTarget(Operations\GetWorkspaceEventsByTargetRequest $request, ?Options $options = null): Operations\GetWorkspaceEventsByTargetResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/workspace/{workspace_id}/events/targets/{target_id}/events', Operations\GetWorkspaceEventsByTargetRequest::class, $request, $this->sdkConfiguration->globals);
        $urlOverride = null;
        $httpOptions = ['http_errors' => false];

        $qp = Utils\Utils::getQueryParams(Operations\GetWorkspaceEventsByTargetRequest::class, $request, $urlOverride, $this->sdkConfiguration->globals);
        $httpOptions['headers']['Accept'] = 'application/json';
        $httpOptions['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);
        $hookContext = new HookContext($baseUrl, 'getWorkspaceEventsByTarget', [], $this->sdkConfiguration->securitySource);
        $httpRequest = $this->sdkConfiguration->hooks->beforeRequest(new Hooks\BeforeRequestContext($hookContext), $httpRequest);
        $httpOptions['query'] = Utils\QueryParameters::standardizeQueryParams($httpRequest, $qp);
        $httpOptions = Utils\Utils::convertHeadersToOptions($httpRequest, $httpOptions);
        $httpRequest = Utils\Utils::removeHeaders($httpRequest);
        try {
            $httpResponse = $this->sdkConfiguration->client->send($httpRequest, $httpOptions);
        } catch (\GuzzleHttp\Exception\GuzzleException $error) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), null, $error);
            $httpResponse = $res;
        }
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if (Utils\Utils::matchStatusCodes($statusCode, ['4XX', '5XX'])) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), $httpResponse, null);
            $httpResponse = $res;
        }
        if (Utils\Utils::matchStatusCodes($statusCode, ['200'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, 'array<\Speakeasy\SpeakeasyClientSDK\Models\Shared\CliEvent>', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetWorkspaceEventsByTargetResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    cliEventBatch: $obj);

                return $response;
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKExceptioon('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['4XX'])) {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKExceptioon('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['5XX'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Speakeasy\SpeakeasyClientSDK\Models\Errorors\Error', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKExceptioon('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } else {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKExceptioon('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Load targets for a particular workspace
     *
     * @param  ?Operations\GetWorkspaceTargetsRequest  $request
     * @return Operations\GetWorkspaceTargetsResponse
     * @throws \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKExceptioon
     */
    public function getTargets(?Operations\GetWorkspaceTargetsRequest $request = null, ?Options $options = null): Operations\GetWorkspaceTargetsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/workspace/events/targets');
        $urlOverride = null;
        $httpOptions = ['http_errors' => false];

        $qp = Utils\Utils::getQueryParams(Operations\GetWorkspaceTargetsRequest::class, $request, $urlOverride, $this->sdkConfiguration->globals);
        $httpOptions['headers']['Accept'] = 'application/json';
        $httpOptions['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);
        $hookContext = new HookContext($baseUrl, 'getWorkspaceTargets', [], $this->sdkConfiguration->securitySource);
        $httpRequest = $this->sdkConfiguration->hooks->beforeRequest(new Hooks\BeforeRequestContext($hookContext), $httpRequest);
        $httpOptions['query'] = Utils\QueryParameters::standardizeQueryParams($httpRequest, $qp);
        $httpOptions = Utils\Utils::convertHeadersToOptions($httpRequest, $httpOptions);
        $httpRequest = Utils\Utils::removeHeaders($httpRequest);
        try {
            $httpResponse = $this->sdkConfiguration->client->send($httpRequest, $httpOptions);
        } catch (\GuzzleHttp\Exception\GuzzleException $error) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), null, $error);
            $httpResponse = $res;
        }
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if (Utils\Utils::matchStatusCodes($statusCode, ['4XX', '5XX'])) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), $httpResponse, null);
            $httpResponse = $res;
        }
        if (Utils\Utils::matchStatusCodes($statusCode, ['200'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, 'array<\Speakeasy\SpeakeasyClientSDK\Models\Shared\TargetSDK>', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetWorkspaceTargetsResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    targetSDKList: $obj);

                return $response;
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKExceptioon('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['4XX'])) {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKExceptioon('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['5XX'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Speakeasy\SpeakeasyClientSDK\Models\Errorors\Error', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKExceptioon('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } else {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKExceptioon('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Load targets for a particular workspace
     *
     * @param  ?Operations\GetWorkspaceTargetsDeprecatedRequest  $request
     * @return Operations\GetWorkspaceTargetsDeprecatedResponse
     * @throws \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKExceptioon
     */
    public function getTargetsDeprecated(?Operations\GetWorkspaceTargetsDeprecatedRequest $request = null, ?Options $options = null): Operations\GetWorkspaceTargetsDeprecatedResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/workspace/{workspace_id}/events/targets', Operations\GetWorkspaceTargetsDeprecatedRequest::class, $request, $this->sdkConfiguration->globals);
        $urlOverride = null;
        $httpOptions = ['http_errors' => false];

        $qp = Utils\Utils::getQueryParams(Operations\GetWorkspaceTargetsDeprecatedRequest::class, $request, $urlOverride, $this->sdkConfiguration->globals);
        $httpOptions['headers']['Accept'] = 'application/json';
        $httpOptions['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);
        $hookContext = new HookContext($baseUrl, 'getWorkspaceTargetsDeprecated', [], $this->sdkConfiguration->securitySource);
        $httpRequest = $this->sdkConfiguration->hooks->beforeRequest(new Hooks\BeforeRequestContext($hookContext), $httpRequest);
        $httpOptions['query'] = Utils\QueryParameters::standardizeQueryParams($httpRequest, $qp);
        $httpOptions = Utils\Utils::convertHeadersToOptions($httpRequest, $httpOptions);
        $httpRequest = Utils\Utils::removeHeaders($httpRequest);
        try {
            $httpResponse = $this->sdkConfiguration->client->send($httpRequest, $httpOptions);
        } catch (\GuzzleHttp\Exception\GuzzleException $error) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), null, $error);
            $httpResponse = $res;
        }
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if (Utils\Utils::matchStatusCodes($statusCode, ['4XX', '5XX'])) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), $httpResponse, null);
            $httpResponse = $res;
        }
        if (Utils\Utils::matchStatusCodes($statusCode, ['200'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, 'array<\Speakeasy\SpeakeasyClientSDK\Models\Shared\TargetSDK>', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetWorkspaceTargetsDeprecatedResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    targetSDKList: $obj);

                return $response;
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKExceptioon('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['4XX'])) {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKExceptioon('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['5XX'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Speakeasy\SpeakeasyClientSDK\Models\Errorors\Error', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKExceptioon('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } else {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKExceptioon('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Post events for a specific workspace
     *
     * Sends an array of events to be stored for a particular workspace.
     *
     * @param  Operations\PostWorkspaceEventsRequest  $request
     * @return Operations\PostWorkspaceEventsResponse
     * @throws \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKExceptioon
     */
    public function post(Operations\PostWorkspaceEventsRequest $request, ?Options $options = null): Operations\PostWorkspaceEventsResponse
    {
        $retryConfig = null;
        if ($options) {
            $retryConfig = $options->retryConfig;
        }
        if ($retryConfig === null && $this->sdkConfiguration->retryConfig) {
            $retryConfig = $this->sdkConfiguration->retryConfig;
        } else {
            $retryConfig = new Retry\RetryConfigBackoff(
                initialIntervalMs: 100,
                maxIntervalMs: 2000,
                exponent: 1.5,
                maxElapsedTimeMs: 60000,
                retryConnectionErrors: true,
            );
        }
        $retryCodes = null;
        if ($options) {
            $retryCodes = $options->retryCodes;
        }
        if ($retryCodes === null) {
            $retryCodes = [
                '408',
                '500',
                '502',
                '503',
            ];
        }
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/workspace/{workspace_id}/events', Operations\PostWorkspaceEventsRequest::class, $request, $this->sdkConfiguration->globals);
        $urlOverride = null;
        $httpOptions = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'requestBody', 'json');
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $httpOptions = array_merge_recursive($httpOptions, $body);
        $httpOptions['headers']['Accept'] = 'application/json';
        $httpOptions['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('POST', $url);
        $hookContext = new HookContext($baseUrl, 'postWorkspaceEvents', [], $this->sdkConfiguration->securitySource);
        $httpRequest = $this->sdkConfiguration->hooks->beforeRequest(new Hooks\BeforeRequestContext($hookContext), $httpRequest);
        $httpOptions = Utils\Utils::convertHeadersToOptions($httpRequest, $httpOptions);
        $httpRequest = Utils\Utils::removeHeaders($httpRequest);
        try {
            $httpResponse = RetryUtils::retryWrapper(fn () => $this->sdkConfiguration->client->send($httpRequest, $httpOptions), $retryConfig, $retryCodes);
        } catch (\GuzzleHttp\Exception\GuzzleException $error) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), null, $error);
            $httpResponse = $res;
        }
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if (Utils\Utils::matchStatusCodes($statusCode, ['4XX', '5XX'])) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), $httpResponse, null);
            $httpResponse = $res;
        }
        if (Utils\Utils::matchStatusCodes($statusCode, ['2XX'])) {
            $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

            return new Operations\PostWorkspaceEventsResponse(
                statusCode: $statusCode,
                contentType: $contentType,
                rawResponse: $httpResponse
            );
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['4XX'])) {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKExceptioon('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['5XX'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Speakeasy\SpeakeasyClientSDK\Models\Errorors\Error', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKExceptioon('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } else {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKExceptioon('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Search events for a particular workspace by any field
     *
     * @param  ?Operations\SearchWorkspaceEventsRequest  $request
     * @return Operations\SearchWorkspaceEventsResponse
     * @throws \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKExceptioon
     */
    public function search(?Operations\SearchWorkspaceEventsRequest $request = null, ?Options $options = null): Operations\SearchWorkspaceEventsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/workspace/{workspace_id}/events', Operations\SearchWorkspaceEventsRequest::class, $request, $this->sdkConfiguration->globals);
        $urlOverride = null;
        $httpOptions = ['http_errors' => false];

        $qp = Utils\Utils::getQueryParams(Operations\SearchWorkspaceEventsRequest::class, $request, $urlOverride, $this->sdkConfiguration->globals);
        $httpOptions['headers']['Accept'] = 'application/json';
        $httpOptions['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);
        $hookContext = new HookContext($baseUrl, 'searchWorkspaceEvents', [], $this->sdkConfiguration->securitySource);
        $httpRequest = $this->sdkConfiguration->hooks->beforeRequest(new Hooks\BeforeRequestContext($hookContext), $httpRequest);
        $httpOptions['query'] = Utils\QueryParameters::standardizeQueryParams($httpRequest, $qp);
        $httpOptions = Utils\Utils::convertHeadersToOptions($httpRequest, $httpOptions);
        $httpRequest = Utils\Utils::removeHeaders($httpRequest);
        try {
            $httpResponse = $this->sdkConfiguration->client->send($httpRequest, $httpOptions);
        } catch (\GuzzleHttp\Exception\GuzzleException $error) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), null, $error);
            $httpResponse = $res;
        }
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if (Utils\Utils::matchStatusCodes($statusCode, ['4XX', '5XX'])) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), $httpResponse, null);
            $httpResponse = $res;
        }
        if (Utils\Utils::matchStatusCodes($statusCode, ['200'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, 'array<\Speakeasy\SpeakeasyClientSDK\Models\Shared\CliEvent>', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\SearchWorkspaceEventsResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    cliEventBatch: $obj);

                return $response;
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKExceptioon('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['4XX'])) {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKExceptioon('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['5XX'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Speakeasy\SpeakeasyClientSDK\Models\Errorors\Error', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKExceptioon('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } else {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKExceptioon('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

}