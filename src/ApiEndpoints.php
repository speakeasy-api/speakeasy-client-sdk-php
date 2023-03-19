<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK;

class ApiEndpoints 
{

	// SDK private variables namespaced with _ to avoid conflicts with API models
	private \GuzzleHttp\ClientInterface $_defaultClient;
	private \GuzzleHttp\ClientInterface $_securityClient;
	private string $_serverUrl;
	private string $_language;
	private string $_sdkVersion;
	private string $_genVersion;	

	/**
	 * @param \GuzzleHttp\ClientInterface $defaultClient
	 * @param \GuzzleHttp\ClientInterface $securityClient
	 * @param string $serverUrl
	 * @param string $language
	 * @param string $sdkVersion
	 * @param string $genVersion
	 */
	public function __construct(\GuzzleHttp\ClientInterface $defaultClient, \GuzzleHttp\ClientInterface $securityClient, string $serverUrl, string $language, string $sdkVersion, string $genVersion)
	{
		$this->_defaultClient = $defaultClient;
		$this->_securityClient = $securityClient;
		$this->_serverUrl = $serverUrl;
		$this->_language = $language;
		$this->_sdkVersion = $sdkVersion;
		$this->_genVersion = $genVersion;
	}
	
    /**
     * deleteApiEndpoint - Delete an ApiEndpoint.
     *
     * Delete an ApiEndpoint. This will also delete all associated Request Logs (if using a Postgres datastore).
     * @param \Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteApiEndpointRequest $request
    */
    public function deleteApiEndpoint(
        \Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteApiEndpointRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteApiEndpointResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}/api_endpoints/{apiEndpointID}', \Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteApiEndpointPathParams::class, $request->pathParams);
        
        $options = ['http_errors' => false];
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteApiEndpointResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * findApiEndpoint - Find an ApiEndpoint via its displayName.
     *
     * Find an ApiEndpoint via its displayName (set by operationId from a registered OpenAPI schema).
     * This is useful for finding the ID of an ApiEndpoint to use in the /v1/apis/{apiID}/version/{versionID}/api_endpoints/{apiEndpointID} endpoints.
     * @param \Speakeasy\SpeakeasyClientSDK\Models\Operations\FindApiEndpointRequest $request
    */
    public function findApiEndpoint(
        \Speakeasy\SpeakeasyClientSDK\Models\Operations\FindApiEndpointRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\FindApiEndpointResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}/api_endpoints/find/{displayName}', \Speakeasy\SpeakeasyClientSDK\Models\Operations\FindApiEndpointPathParams::class, $request->pathParams);
        
        $options = ['http_errors' => false];
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\FindApiEndpointResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->apiEndpoint = $serializer->deserialize((string)$httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\ApiEndpoint', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * generateOpenApiSpecForApiEndpoint - Generate an OpenAPI specification for a particular ApiEndpoint.
     *
     * This endpoint will generate a new operation in any registered OpenAPI document if the operation does not already exist in the document.
     * Returns the original document and the newly generated document allowing a diff to be performed to see what has changed.
     * @param \Speakeasy\SpeakeasyClientSDK\Models\Operations\GenerateOpenApiSpecForApiEndpointRequest $request
    */
    public function generateOpenApiSpecForApiEndpoint(
        \Speakeasy\SpeakeasyClientSDK\Models\Operations\GenerateOpenApiSpecForApiEndpointRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\GenerateOpenApiSpecForApiEndpointResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}/api_endpoints/{apiEndpointID}/generate/openapi', \Speakeasy\SpeakeasyClientSDK\Models\Operations\GenerateOpenApiSpecForApiEndpointPathParams::class, $request->pathParams);
        
        $options = ['http_errors' => false];
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GenerateOpenApiSpecForApiEndpointResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->generateOpenApiSpecDiff = $serializer->deserialize((string)$httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\GenerateOpenApiSpecDiff', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * generatePostmanCollectionForApiEndpoint - Generate a Postman collection for a particular ApiEndpoint.
     *
     * Generates a postman collection that allows the endpoint to be called from postman variables produced for any path/query/header parameters included in the OpenAPI document.
     * @param \Speakeasy\SpeakeasyClientSDK\Models\Operations\GeneratePostmanCollectionForApiEndpointRequest $request
    */
    public function generatePostmanCollectionForApiEndpoint(
        \Speakeasy\SpeakeasyClientSDK\Models\Operations\GeneratePostmanCollectionForApiEndpointRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\GeneratePostmanCollectionForApiEndpointResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}/api_endpoints/{apiEndpointID}/generate/postman', \Speakeasy\SpeakeasyClientSDK\Models\Operations\GeneratePostmanCollectionForApiEndpointPathParams::class, $request->pathParams);
        
        $options = ['http_errors' => false];
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GeneratePostmanCollectionForApiEndpointResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/octet-stream')) {
                $response->postmanCollection = $httpResponse->getBody()->getContents();
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * getAllApiEndpoints - Get all Api endpoints for a particular apiID.
     * @param \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllApiEndpointsRequest $request
    */
    public function getAllApiEndpoints(
        \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllApiEndpointsRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllApiEndpointsResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/api_endpoints', \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllApiEndpointsPathParams::class, $request->pathParams);
        
        $options = ['http_errors' => false];
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllApiEndpointsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->apiEndpoints = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Speakeasy\SpeakeasyClientSDK\Models\Shared\ApiEndpoint>', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * getAllForVersionApiEndpoints - Get all ApiEndpoints for a particular apiID and versionID.
     * @param \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllForVersionApiEndpointsRequest $request
    */
    public function getAllForVersionApiEndpoints(
        \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllForVersionApiEndpointsRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllForVersionApiEndpointsResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}/api_endpoints', \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllForVersionApiEndpointsPathParams::class, $request->pathParams);
        
        $options = ['http_errors' => false];
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetAllForVersionApiEndpointsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->apiEndpoints = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Speakeasy\SpeakeasyClientSDK\Models\Shared\ApiEndpoint>', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * getApiEndpoint - Get an ApiEndpoint.
     * @param \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetApiEndpointRequest $request
    */
    public function getApiEndpoint(
        \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetApiEndpointRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetApiEndpointResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}/api_endpoints/{apiEndpointID}', \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetApiEndpointPathParams::class, $request->pathParams);
        
        $options = ['http_errors' => false];
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetApiEndpointResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->apiEndpoint = $serializer->deserialize((string)$httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\ApiEndpoint', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * upsertApiEndpoint - Upsert an ApiEndpoint.
     *
     * Upsert an ApiEndpoint. If the ApiEndpoint does not exist it will be created, otherwise it will be updated.
     * @param \Speakeasy\SpeakeasyClientSDK\Models\Operations\UpsertApiEndpointRequest $request
    */
    public function upsertApiEndpoint(
        \Speakeasy\SpeakeasyClientSDK\Models\Operations\UpsertApiEndpointRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\UpsertApiEndpointResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}/api_endpoints/{apiEndpointID}', \Speakeasy\SpeakeasyClientSDK\Models\Operations\UpsertApiEndpointPathParams::class, $request->pathParams);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\UpsertApiEndpointResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->apiEndpoint = $serializer->deserialize((string)$httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\ApiEndpoint', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
}