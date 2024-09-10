<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK;

use JMS\Serializer\DeserializationContext;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;

class Organizations
{
    private SDKConfiguration $sdkConfiguration;
    /**
     * @param  SDKConfiguration  $sdkConfig
     */
    public function __construct(SDKConfiguration $sdkConfig)
    {
        $this->sdkConfiguration = $sdkConfig;
    }

    /**
     * Create a free trial for an organization
     *
     * Creates a free trial for an organization
     *
     * @return Operations\CreateFreeTrialResponse
     * @throws \Speakeasy\SpeakeasyClientSDK\Models\Errors\SDKException
     */
    public function createFreeTrial(
    ): Operations\CreateFreeTrialResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/organization/free_trial');
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('POST', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            return new Operations\CreateFreeTrialResponse(
                statusCode: $statusCode,
                contentType: $contentType,
                rawResponse: $httpResponse
            );
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Speakeasy\SpeakeasyClientSDK\Models\Errors\Error', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\CreateFreeTrialResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    error: $obj);

                return $response;
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        }
    }

    /**
     * Get organization
     *
     * Get information about a particular organization.
     *
     * @param  Operations\GetOrganizationRequest  $request
     * @return Operations\GetOrganizationResponse
     * @throws \Speakeasy\SpeakeasyClientSDK\Models\Errors\SDKException
     */
    public function getOrganization(
        ?Operations\GetOrganizationRequest $request,
    ): Operations\GetOrganizationResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/organization/{organizationID}', Operations\GetOrganizationRequest::class, $request, $this->sdkConfiguration->globals);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Speakeasy\SpeakeasyClientSDK\Models\Shared\Organization', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetOrganizationResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    organization: $obj);

                return $response;
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Speakeasy\SpeakeasyClientSDK\Models\Errors\Error', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetOrganizationResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    error: $obj);

                return $response;
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        }
    }

    /**
     * Get billing usage summary for a particular organization
     *
     * Returns a billing usage summary by target languages for a particular organization
     *
     * @return Operations\GetOrganizationUsageResponse
     * @throws \Speakeasy\SpeakeasyClientSDK\Models\Errors\SDKException
     */
    public function getOrganizationUsage(
    ): Operations\GetOrganizationUsageResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/organization/usage');
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Speakeasy\SpeakeasyClientSDK\Models\Shared\OrganizationUsageResponse', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetOrganizationUsageResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    organizationUsageResponse: $obj);

                return $response;
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Speakeasy\SpeakeasyClientSDK\Models\Errors\Error', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetOrganizationUsageResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    error: $obj);

                return $response;
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        }
    }

    /**
     * Get organizations for a user
     *
     * Returns a list of organizations a user has access too
     *
     * @return Operations\GetOrganizationsResponse
     * @throws \Speakeasy\SpeakeasyClientSDK\Models\Errors\SDKException
     */
    public function getOrganizations(
    ): Operations\GetOrganizationsResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/organization');
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), 'array<\Speakeasy\SpeakeasyClientSDK\Models\Shared\Organization>', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetOrganizationsResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    organizations: $obj);

                return $response;
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Speakeasy\SpeakeasyClientSDK\Models\Errors\Error', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetOrganizationsResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    error: $obj);

                return $response;
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        }
    }

}