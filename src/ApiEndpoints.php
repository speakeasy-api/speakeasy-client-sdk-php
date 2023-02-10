<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK;

class ApiEndpoints 
{
	private \GuzzleHttp\ClientInterface $_defaultClient;
	private \GuzzleHttp\ClientInterface $_securityClient;
	private string $_serverUrl;
	private string $_language;
	private string $_sdkVersion;
	private string $_genVersion;

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
    */
    public function deleteApiEndpoint(\Speakeasy\SpeakeasyClientSDK\models\operations\DeleteApiEndpointRequest $request): \Speakeasy\SpeakeasyClientSDK\models\operations\DeleteApiEndpointResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = utils\Utils::generateURL($baseUrl, '/v1/apis/{apiID}/version/{versionID}/api_endpoints/{apiEndpointID}', $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $client = $this->_securityClient;
        
        $httpRes = $client->request('DELETE', $url, $options);

        $contentType = $httpRes->getHeader('Content-Type')[0] ?? '';

        $res = new \Speakeasy\SpeakeasyClientSDK\models\operations\DeleteApiEndpointResponse();
        $res->statusCode = $httpRes->getStatusCode();
        $res->contentType = $contentType;
        
        if ($httpRes->getStatusCode() == 200) {
        }
        else {
            if (utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = utils\JSON::createSerializer();
                $res->error = $serializer->deserialize($httpRes->getBody()->__toString(), 'Speakeasy\SpeakeasyClientSDK\models\shared\Error', 'json');
            }
        }

        return $res;
    }
    
    /**
     * findApiEndpoint - Find an ApiEndpoint via its displayName.
     *
     * Find an ApiEndpoint via its displayName (set by operationId from a registered OpenAPI schema).
     * This is useful for finding the ID of an ApiEndpoint to use in the /v1/apis/{apiID}/version/{versionID}/api_endpoints/{apiEndpointID} endpoints.
    */
    public function findApiEndpoint(\Speakeasy\SpeakeasyClientSDK\models\operations\FindApiEndpointRequest $request): \Speakeasy\SpeakeasyClientSDK\models\operations\FindApiEndpointResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = utils\Utils::generateURL($baseUrl, '/v1/apis/{apiID}/version/{versionID}/api_endpoints/find/{displayName}', $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $client = $this->_securityClient;
        
        $httpRes = $client->request('GET', $url, $options);

        $contentType = $httpRes->getHeader('Content-Type')[0] ?? '';

        $res = new \Speakeasy\SpeakeasyClientSDK\models\operations\FindApiEndpointResponse();
        $res->statusCode = $httpRes->getStatusCode();
        $res->contentType = $contentType;
        
        if ($httpRes->getStatusCode() == 200) {
            if (utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = utils\JSON::createSerializer();
                $res->apiEndpoint = $serializer->deserialize($httpRes->getBody()->__toString(), 'Speakeasy\SpeakeasyClientSDK\models\shared\ApiEndpoint', 'json');
            }
        }
        else {
            if (utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = utils\JSON::createSerializer();
                $res->error = $serializer->deserialize($httpRes->getBody()->__toString(), 'Speakeasy\SpeakeasyClientSDK\models\shared\Error', 'json');
            }
        }

        return $res;
    }
    
    /**
     * generateOpenApiSpecForApiEndpoint - Generate an OpenAPI specification for a particular ApiEndpoint.
     *
     * This endpoint will generate a new operation in any registered OpenAPI document if the operation does not already exist in the document.
     * Returns the original document and the newly generated document allowing a diff to be performed to see what has changed.
    */
    public function generateOpenApiSpecForApiEndpoint(\Speakeasy\SpeakeasyClientSDK\models\operations\GenerateOpenApiSpecForApiEndpointRequest $request): \Speakeasy\SpeakeasyClientSDK\models\operations\GenerateOpenApiSpecForApiEndpointResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = utils\Utils::generateURL($baseUrl, '/v1/apis/{apiID}/version/{versionID}/api_endpoints/{apiEndpointID}/generate/openapi', $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $client = $this->_securityClient;
        
        $httpRes = $client->request('GET', $url, $options);

        $contentType = $httpRes->getHeader('Content-Type')[0] ?? '';

        $res = new \Speakeasy\SpeakeasyClientSDK\models\operations\GenerateOpenApiSpecForApiEndpointResponse();
        $res->statusCode = $httpRes->getStatusCode();
        $res->contentType = $contentType;
        
        if ($httpRes->getStatusCode() == 200) {
            if (utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = utils\JSON::createSerializer();
                $res->generateOpenApiSpecDiff = $serializer->deserialize($httpRes->getBody()->__toString(), 'Speakeasy\SpeakeasyClientSDK\models\shared\GenerateOpenApiSpecDiff', 'json');
            }
        }
        else {
            if (utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = utils\JSON::createSerializer();
                $res->error = $serializer->deserialize($httpRes->getBody()->__toString(), 'Speakeasy\SpeakeasyClientSDK\models\shared\Error', 'json');
            }
        }

        return $res;
    }
    
    /**
     * generatePostmanCollectionForApiEndpoint - Generate a Postman collection for a particular ApiEndpoint.
     *
     * Generates a postman collection that allows the endpoint to be called from postman variables produced for any path/query/header parameters included in the OpenAPI document.
    */
    public function generatePostmanCollectionForApiEndpoint(\Speakeasy\SpeakeasyClientSDK\models\operations\GeneratePostmanCollectionForApiEndpointRequest $request): \Speakeasy\SpeakeasyClientSDK\models\operations\GeneratePostmanCollectionForApiEndpointResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = utils\Utils::generateURL($baseUrl, '/v1/apis/{apiID}/version/{versionID}/api_endpoints/{apiEndpointID}/generate/postman', $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $client = $this->_securityClient;
        
        $httpRes = $client->request('GET', $url, $options);

        $contentType = $httpRes->getHeader('Content-Type')[0] ?? '';

        $res = new \Speakeasy\SpeakeasyClientSDK\models\operations\GeneratePostmanCollectionForApiEndpointResponse();
        $res->statusCode = $httpRes->getStatusCode();
        $res->contentType = $contentType;
        
        if ($httpRes->getStatusCode() == 200) {
            if (utils\Utils::matchContentType($contentType, 'application/octet-stream')) {
                $res->postmanCollection = $httpRes->getBody()->getContents();
            }
        }
        else {
            if (utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = utils\JSON::createSerializer();
                $res->error = $serializer->deserialize($httpRes->getBody()->__toString(), 'Speakeasy\SpeakeasyClientSDK\models\shared\Error', 'json');
            }
        }

        return $res;
    }
    
    /**
     * getAllApiEndpoints - Get all Api endpoints for a particular apiID.
    */
    public function getAllApiEndpoints(\Speakeasy\SpeakeasyClientSDK\models\operations\GetAllApiEndpointsRequest $request): \Speakeasy\SpeakeasyClientSDK\models\operations\GetAllApiEndpointsResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = utils\Utils::generateURL($baseUrl, '/v1/apis/{apiID}/api_endpoints', $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $client = $this->_securityClient;
        
        $httpRes = $client->request('GET', $url, $options);

        $contentType = $httpRes->getHeader('Content-Type')[0] ?? '';

        $res = new \Speakeasy\SpeakeasyClientSDK\models\operations\GetAllApiEndpointsResponse();
        $res->statusCode = $httpRes->getStatusCode();
        $res->contentType = $contentType;
        
        if ($httpRes->getStatusCode() == 200) {
            if (utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = utils\JSON::createSerializer();
                $res->apiEndpoints = $serializer->deserialize($httpRes->getBody()->__toString(), 'array<Speakeasy\SpeakeasyClientSDK\models\shared\ApiEndpoint>', 'json');
            }
        }
        else {
            if (utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = utils\JSON::createSerializer();
                $res->error = $serializer->deserialize($httpRes->getBody()->__toString(), 'Speakeasy\SpeakeasyClientSDK\models\shared\Error', 'json');
            }
        }

        return $res;
    }
    
    /**
     * getAllForVersionApiEndpoints - Get all ApiEndpoints for a particular apiID and versionID.
    */
    public function getAllForVersionApiEndpoints(\Speakeasy\SpeakeasyClientSDK\models\operations\GetAllForVersionApiEndpointsRequest $request): \Speakeasy\SpeakeasyClientSDK\models\operations\GetAllForVersionApiEndpointsResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = utils\Utils::generateURL($baseUrl, '/v1/apis/{apiID}/version/{versionID}/api_endpoints', $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $client = $this->_securityClient;
        
        $httpRes = $client->request('GET', $url, $options);

        $contentType = $httpRes->getHeader('Content-Type')[0] ?? '';

        $res = new \Speakeasy\SpeakeasyClientSDK\models\operations\GetAllForVersionApiEndpointsResponse();
        $res->statusCode = $httpRes->getStatusCode();
        $res->contentType = $contentType;
        
        if ($httpRes->getStatusCode() == 200) {
            if (utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = utils\JSON::createSerializer();
                $res->apiEndpoints = $serializer->deserialize($httpRes->getBody()->__toString(), 'array<Speakeasy\SpeakeasyClientSDK\models\shared\ApiEndpoint>', 'json');
            }
        }
        else {
            if (utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = utils\JSON::createSerializer();
                $res->error = $serializer->deserialize($httpRes->getBody()->__toString(), 'Speakeasy\SpeakeasyClientSDK\models\shared\Error', 'json');
            }
        }

        return $res;
    }
    
    /**
     * getApiEndpoint - Get an ApiEndpoint.
    */
    public function getApiEndpoint(\Speakeasy\SpeakeasyClientSDK\models\operations\GetApiEndpointRequest $request): \Speakeasy\SpeakeasyClientSDK\models\operations\GetApiEndpointResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = utils\Utils::generateURL($baseUrl, '/v1/apis/{apiID}/version/{versionID}/api_endpoints/{apiEndpointID}', $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $client = $this->_securityClient;
        
        $httpRes = $client->request('GET', $url, $options);

        $contentType = $httpRes->getHeader('Content-Type')[0] ?? '';

        $res = new \Speakeasy\SpeakeasyClientSDK\models\operations\GetApiEndpointResponse();
        $res->statusCode = $httpRes->getStatusCode();
        $res->contentType = $contentType;
        
        if ($httpRes->getStatusCode() == 200) {
            if (utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = utils\JSON::createSerializer();
                $res->apiEndpoint = $serializer->deserialize($httpRes->getBody()->__toString(), 'Speakeasy\SpeakeasyClientSDK\models\shared\ApiEndpoint', 'json');
            }
        }
        else {
            if (utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = utils\JSON::createSerializer();
                $res->error = $serializer->deserialize($httpRes->getBody()->__toString(), 'Speakeasy\SpeakeasyClientSDK\models\shared\Error', 'json');
            }
        }

        return $res;
    }
    
    /**
     * upsertApiEndpoint - Upsert an ApiEndpoint.
     *
     * Upsert an ApiEndpoint. If the ApiEndpoint does not exist it will be created, otherwise it will be updated.
    */
    public function upsertApiEndpoint(\Speakeasy\SpeakeasyClientSDK\models\operations\UpsertApiEndpointRequest $request): \Speakeasy\SpeakeasyClientSDK\models\operations\UpsertApiEndpointResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = utils\Utils::generateURL($baseUrl, '/v1/apis/{apiID}/version/{versionID}/api_endpoints/{apiEndpointID}', $request->pathParams);
        
        $options = ['http_errors' => false];
        $body = utils\Utils::serializeRequestBody($request);
        if (is_null($body)) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $client = $this->_securityClient;
        
        $httpRes = $client->request('PUT', $url, $options);

        $contentType = $httpRes->getHeader('Content-Type')[0] ?? '';

        $res = new \Speakeasy\SpeakeasyClientSDK\models\operations\UpsertApiEndpointResponse();
        $res->statusCode = $httpRes->getStatusCode();
        $res->contentType = $contentType;
        
        if ($httpRes->getStatusCode() == 200) {
            if (utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = utils\JSON::createSerializer();
                $res->apiEndpoint = $serializer->deserialize($httpRes->getBody()->__toString(), 'Speakeasy\SpeakeasyClientSDK\models\shared\ApiEndpoint', 'json');
            }
        }
        else {
            if (utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = utils\JSON::createSerializer();
                $res->error = $serializer->deserialize($httpRes->getBody()->__toString(), 'Speakeasy\SpeakeasyClientSDK\models\shared\Error', 'json');
            }
        }

        return $res;
    }
}