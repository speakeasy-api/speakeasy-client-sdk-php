<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK;

use Speakeasy\Serializer\DeserializationContext;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;

class Requests
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
     * Generate a Postman collection for a particular request.
     *
     * Generates a Postman collection for a particular request.
     * Allowing it to be replayed with the same inputs that were captured by the SDK.
     *
     * @param  Operations\GenerateRequestPostmanCollectionRequest  $request
     * @return Operations\GenerateRequestPostmanCollectionResponse
     * @throws \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException
     */
    public function generateRequestPostmanCollection(Operations\GenerateRequestPostmanCollectionRequest $request): Operations\GenerateRequestPostmanCollectionResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/eventlog/{requestID}/generate/postman', Operations\GenerateRequestPostmanCollectionRequest::class, $request, $this->sdkConfiguration->globals);
        $urlOverride = null;
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/octet-stream';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode >= 200 && $statusCode < 300) {
            if (Utils\Utils::matchContentType($contentType, 'application/octet-stream')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\GenerateRequestPostmanCollectionResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    postmanCollection: $obj);
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Speakeasy\SpeakeasyClientSDK\Models\Errorors\Error', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 500 && $statusCode < 600) {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Get information about a particular request.
     *
     * @param  Operations\GetRequestFromEventLogRequest  $request
     * @return Operations\GetRequestFromEventLogResponse
     * @throws \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException
     */
    public function getRequestFromEventLog(Operations\GetRequestFromEventLogRequest $request): Operations\GetRequestFromEventLogResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/eventlog/{requestID}', Operations\GetRequestFromEventLogRequest::class, $request, $this->sdkConfiguration->globals);
        $urlOverride = null;
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode >= 200 && $statusCode < 300) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Speakeasy\SpeakeasyClientSDK\Models\Shared\UnboundedRequest', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetRequestFromEventLogResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    unboundedRequest: $obj);

                return $response;
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Speakeasy\SpeakeasyClientSDK\Models\Errorors\Error', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 500 && $statusCode < 600) {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Query the event log to retrieve a list of requests.
     *
     * Supports retrieving a list of request captured by the SDK for this workspace.
     * Allows the filtering of requests on a number of criteria such as ApiID, VersionID, Path, Method, etc.
     *
     * @param  ?Operations\QueryEventLogRequest  $request
     * @return Operations\QueryEventLogResponse
     * @throws \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException
     */
    public function queryEventLog(?Operations\QueryEventLogRequest $request = null): Operations\QueryEventLogResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/eventlog/query');
        $urlOverride = null;
        $options = ['http_errors' => false];

        $qp = Utils\Utils::getQueryParams(Operations\QueryEventLogRequest::class, $request, $urlOverride, $this->sdkConfiguration->globals);

        $options = array_merge_recursive($options, $qp);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode >= 200 && $statusCode < 300) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, 'array<\Speakeasy\SpeakeasyClientSDK\Models\Shared\BoundedRequest>', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\QueryEventLogResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    boundedRequests: $obj);

                return $response;
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Speakeasy\SpeakeasyClientSDK\Models\Errorors\Error', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 500 && $statusCode < 600) {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

}