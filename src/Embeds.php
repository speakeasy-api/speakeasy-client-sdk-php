<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK;

class Embeds
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
     * Get an embed access token for the current workspace.
     *
     * Returns an embed access token for the current workspace. This can be used to authenticate access to externally embedded content.
     * Filters can be applied allowing views to be filtered to things like particular customerIds.
     *
     * @param  \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetEmbedAccessTokenRequest  $request
     * @return \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetEmbedAccessTokenResponse
     */
    public function getEmbedAccessToken(
        ?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetEmbedAccessTokenRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetEmbedAccessTokenResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/workspace/embed-access-token');
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetEmbedAccessTokenRequest::class, $request, $this->sdkConfiguration->globals));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetEmbedAccessTokenResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->embedAccessTokenResponse = $serializer->deserialize((string) $httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\EmbedAccessTokenResponse', 'json');
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
     * Get all valid embed access tokens for the current workspace.
     *
     * @return \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetValidEmbedAccessTokensResponse
     */
    public function getValidEmbedAccessTokens(
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetValidEmbedAccessTokensResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/workspace/embed-access-tokens/valid');
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetValidEmbedAccessTokensResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->embedTokens = $serializer->deserialize((string) $httpResponse->getBody(), 'array<Speakeasy\SpeakeasyClientSDK\Models\Shared\EmbedToken>', 'json');
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
     * Revoke an embed access EmbedToken.
     *
     * @param  \Speakeasy\SpeakeasyClientSDK\Models\Operations\RevokeEmbedAccessTokenRequest  $request
     * @return \Speakeasy\SpeakeasyClientSDK\Models\Operations\RevokeEmbedAccessTokenResponse
     */
    public function revokeEmbedAccessToken(
        ?\Speakeasy\SpeakeasyClientSDK\Models\Operations\RevokeEmbedAccessTokenRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\RevokeEmbedAccessTokenResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/workspace/embed-access-tokens/{tokenID}', \Speakeasy\SpeakeasyClientSDK\Models\Operations\RevokeEmbedAccessTokenRequest::class, $request, $this->sdkConfiguration->globals);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\RevokeEmbedAccessTokenResponse();
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
}