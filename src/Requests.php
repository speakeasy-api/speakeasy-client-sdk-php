<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK;

class Requests 
{
	
	
	
	// SDK private variables namespaced with _ to avoid conflicts with API models
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
     * generateRequestPostmanCollection - Generate a Postman collection for a particular request.
     *
     * Generates a Postman collection for a particular request. 
     * Allowing it to be replayed with the same inputs that were captured by the SDK.
    */
    public function generateRequestPostmanCollection(
        \Speakeasy\SpeakeasyClientSDK\Models\Operations\GenerateRequestPostmanCollectionRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\GenerateRequestPostmanCollectionResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/v1/eventlog/{requestID}/generate/postman', $request->pathParams);
        
        $options = ['http_errors' => false];
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GenerateRequestPostmanCollectionResponse();
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
     * getRequestFromEventLog - Get information about a particular request.
    */
    public function getRequestFromEventLog(
        \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetRequestFromEventLogRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetRequestFromEventLogResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/v1/eventlog/{requestID}', $request->pathParams);
        
        $options = ['http_errors' => false];
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetRequestFromEventLogResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->unboundedRequest = $serializer->deserialize((string)$httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\UnboundedRequest', 'json');
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
     * queryEventLog - Query the event log to retrieve a list of requests.
     *
     * Supports retrieving a list of request captured by the SDK for this workspace.
     * Allows the filtering of requests on a number of criteria such as ApiID, VersionID, Path, Method, etc.
    */
    public function queryEventLog(
        \Speakeasy\SpeakeasyClientSDK\Models\Operations\QueryEventLogRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\QueryEventLogResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/v1/eventlog/query');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams($request->queryParams));
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\QueryEventLogResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->boundedRequests = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Speakeasy\SpeakeasyClientSDK\Models\Shared\BoundedRequest>', 'json');
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