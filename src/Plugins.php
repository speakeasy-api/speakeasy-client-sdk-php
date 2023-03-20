<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK;

class Plugins 
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
     * getPlugins - Get all plugins for the current workspace.
    */
    public function getPlugins(
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetPluginsResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/plugins');
        
        $options = ['http_errors' => false];
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetPluginsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->plugins = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Speakeasy\SpeakeasyClientSDK\Models\Shared\Plugin>', 'json');
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
     * runPlugin - Run a plugin
     * @param \Speakeasy\SpeakeasyClientSDK\Models\Operations\RunPluginRequest $request
    */
    public function runPlugin(
        \Speakeasy\SpeakeasyClientSDK\Models\Operations\RunPluginRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\RunPluginResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/plugins/{pluginID}', \Speakeasy\SpeakeasyClientSDK\Models\Operations\RunPluginPathParams::class, $request->pathParams);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Speakeasy\SpeakeasyClientSDK\Models\Operations\RunPluginQueryParams::class, $request->queryParams, null));
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\RunPluginResponse();
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
	
    /**
     * upsertPlugin - Upsert a plugin
     * @param \Speakeasy\SpeakeasyClientSDK\Models\Operations\UpsertPluginRequest $request
    */
    public function upsertPlugin(
        \Speakeasy\SpeakeasyClientSDK\Models\Operations\UpsertPluginRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\UpsertPluginResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/plugins');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\UpsertPluginResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->plugin = $serializer->deserialize((string)$httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\Plugin', 'json');
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