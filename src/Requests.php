<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp;

class Requests 
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
     * generateRequestPostmanCollection - Generate a Postman collection for a particular request.
     *
     * Generates a Postman collection for a particular request. 
     * Allowing it to be replayed with the same inputs that were captured by the SDK.
    */
    public function generateRequestPostmanCollection(\Speakeasy\SpeakeasyClientSdkPhp\models\operations\GenerateRequestPostmanCollectionRequest $request): \Speakeasy\SpeakeasyClientSdkPhp\models\operations\GenerateRequestPostmanCollectionResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = utils\Utils::generateURL($baseUrl, '/v1/eventlog/{requestID}/generate/postman', $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $client = $this->_securityClient;
        
        $httpRes = $client->request('GET', $url, $options);

        $contentType = $httpRes->getHeader('Content-Type')[0] ?? '';

        $res = new \Speakeasy\SpeakeasyClientSdkPhp\models\operations\GenerateRequestPostmanCollectionResponse();
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
                $res->error = $serializer->deserialize($httpRes->getBody()->__toString(), 'Speakeasy\SpeakeasyClientSdkPhp\models\shared\Error', 'json');
            }
        }

        return $res;
    }
    
    /**
     * getRequestFromEventLog - Get information about a particular request.
    */
    public function getRequestFromEventLog(\Speakeasy\SpeakeasyClientSdkPhp\models\operations\GetRequestFromEventLogRequest $request): \Speakeasy\SpeakeasyClientSdkPhp\models\operations\GetRequestFromEventLogResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = utils\Utils::generateURL($baseUrl, '/v1/eventlog/{requestID}', $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $client = $this->_securityClient;
        
        $httpRes = $client->request('GET', $url, $options);

        $contentType = $httpRes->getHeader('Content-Type')[0] ?? '';

        $res = new \Speakeasy\SpeakeasyClientSdkPhp\models\operations\GetRequestFromEventLogResponse();
        $res->statusCode = $httpRes->getStatusCode();
        $res->contentType = $contentType;
        
        if ($httpRes->getStatusCode() == 200) {
            if (utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = utils\JSON::createSerializer();
                $res->unboundedRequest = $serializer->deserialize($httpRes->getBody()->__toString(), 'Speakeasy\SpeakeasyClientSdkPhp\models\shared\UnboundedRequest', 'json');
            }
        }
        else {
            if (utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = utils\JSON::createSerializer();
                $res->error = $serializer->deserialize($httpRes->getBody()->__toString(), 'Speakeasy\SpeakeasyClientSdkPhp\models\shared\Error', 'json');
            }
        }

        return $res;
    }
    
    /**
     * queryEventLog - Query the event log to retrieve a list of requests.
     *
     * Supports retrieving a list of request captured by the SDK for this workspace.
     * Allows the filtering of requests on a number of criteria such as ApiID, VersionID, Path, Method, etc.
    */
    public function queryEventLog(\Speakeasy\SpeakeasyClientSdkPhp\models\operations\QueryEventLogRequest $request): \Speakeasy\SpeakeasyClientSdkPhp\models\operations\QueryEventLogResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = utils\Utils::generateURL($baseUrl, '/v1/eventlog/query');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, utils\Utils::getQueryParams($request->queryParams));
        
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $client = $this->_securityClient;
        
        $httpRes = $client->request('GET', $url, $options);

        $contentType = $httpRes->getHeader('Content-Type')[0] ?? '';

        $res = new \Speakeasy\SpeakeasyClientSdkPhp\models\operations\QueryEventLogResponse();
        $res->statusCode = $httpRes->getStatusCode();
        $res->contentType = $contentType;
        
        if ($httpRes->getStatusCode() == 200) {
            if (utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = utils\JSON::createSerializer();
                $res->boundedRequests = $serializer->deserialize($httpRes->getBody()->__toString(), 'array<Speakeasy\SpeakeasyClientSdkPhp\models\shared\BoundedRequest>', 'json');
            }
        }
        else {
            if (utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = utils\JSON::createSerializer();
                $res->error = $serializer->deserialize($httpRes->getBody()->__toString(), 'Speakeasy\SpeakeasyClientSdkPhp\models\shared\Error', 'json');
            }
        }

        return $res;
    }
}