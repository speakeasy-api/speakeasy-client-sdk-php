<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK;

class Events 
{

	private SDKConfiguration $sdkConfiguration;

	/**
	 * @param SDKConfiguration $sdkConfig
	 */
	public function __construct(SDKConfiguration $sdkConfig)
	{
		$this->sdkConfiguration = $sdkConfig;
	}
	
    /**
     * Load recent events for a particular workspace
     * 
     * @param \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetWorkspaceEventsRequest $request
     * @return \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetWorkspaceEventsResponse
     */
	public function getWorkspaceEvents(
        ?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetWorkspaceEventsRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetWorkspaceEventsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/workspace/{workspaceID}/events', \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetWorkspaceEventsRequest::class, $request, $this->sdkConfiguration->globals);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetWorkspaceEventsRequest::class, $request, $this->sdkConfiguration->globals));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetWorkspaceEventsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->cliEventBatch = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Speakeasy\SpeakeasyClientSDK\Models\Shared\CliEvent>', 'json');
            }
        }
        else if (($httpResponse->getStatusCode() >= 500 && $httpResponse->getStatusCode() < 600)) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Load targets for a particular workspace
     * 
     * @param \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetWorkspaceTargetsRequest $request
     * @return \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetWorkspaceTargetsResponse
     */
	public function getWorkspaceTargets(
        ?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetWorkspaceTargetsRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetWorkspaceTargetsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/workspace/{workspaceID}/events/targets', \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetWorkspaceTargetsRequest::class, $request, $this->sdkConfiguration->globals);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetWorkspaceTargetsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->targetSDKList = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Speakeasy\SpeakeasyClientSDK\Models\Shared\TargetSDK>', 'json');
            }
        }
        else if (($httpResponse->getStatusCode() >= 500 && $httpResponse->getStatusCode() < 600)) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Post events for a specific workspace
     * 
     * Sends an array of events to be stored for a particular workspace.
     * 
     * @param \Speakeasy\SpeakeasyClientSDK\Models\Operations\PostWorkspaceEventsRequest $request
     * @return \Speakeasy\SpeakeasyClientSDK\Models\Operations\PostWorkspaceEventsResponse
     */
	public function postWorkspaceEvents(
        \Speakeasy\SpeakeasyClientSDK\Models\Operations\PostWorkspaceEventsRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\PostWorkspaceEventsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/workspace/{workspaceID}/events', \Speakeasy\SpeakeasyClientSDK\Models\Operations\PostWorkspaceEventsRequest::class, $request, $this->sdkConfiguration->globals);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "requestBody", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\PostWorkspaceEventsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if (($httpResponse->getStatusCode() >= 200 && $httpResponse->getStatusCode() < 300)) {
        }
        else if (($httpResponse->getStatusCode() >= 500 && $httpResponse->getStatusCode() < 600)) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
}