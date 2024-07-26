<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK;

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
     * @return \Speakeasy\SpeakeasyClientSDK\Models\Operations\CreateFreeTrialResponse
     */
    public function createFreeTrial(
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\CreateFreeTrialResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/organization/free_trial');
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\CreateFreeTrialResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
        } else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string) $httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }

    /**
     * Get billing usage summary for a particular organization
     *
     * Returns a billing usage summary by target languages for a particular organization
     *
     * @return \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetOrganizationUsageResponse
     */
    public function getOrganizationUsage(
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetOrganizationUsageResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/organization/usage');
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetOrganizationUsageResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->organizationUsageResponse = $serializer->deserialize((string) $httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\OrganizationUsageResponse', 'json');
            }
        } else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string) $httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }

    /**
     * Get organizations for a user
     *
     * Returns a list of organizations a user has access too
     *
     * @return \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetOrganizationsResponse
     */
    public function getOrganizations(
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetOrganizationsResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/organization');
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetOrganizationsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->organizations = $serializer->deserialize((string) $httpResponse->getBody(), 'array<Speakeasy\SpeakeasyClientSDK\Models\Shared\Organization>', 'json');
            }
        } else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string) $httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
}