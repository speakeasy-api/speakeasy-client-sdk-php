<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK;

class Schemas 
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
     * deleteSchema - Delete a particular schema revision for an Api.
    */
    public function deleteSchema(
        \Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteSchemaRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteSchemaResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/v1/apis/{apiID}/version/{versionID}/schema/{revisionID}', $request->pathParams);
        
        $options = ['http_errors' => false];
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\DeleteSchemaResponse();
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
     * downloadSchema - Download the latest schema for a particular apiID.
    */
    public function downloadSchema(
        \Speakeasy\SpeakeasyClientSDK\Models\Operations\DownloadSchemaRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\DownloadSchemaResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/v1/apis/{apiID}/version/{versionID}/schema/download', $request->pathParams);
        
        $options = ['http_errors' => false];
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\DownloadSchemaResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->schema = $serializer->deserialize((string)$httpResponse->getBody(), 'string', 'json');
            }
            if (Utils\Utils::matchContentType($contentType, 'application/x-yaml')) {
                $response->schema = $httpResponse->getBody()->getContents();
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
     * downloadSchemaRevision - Download a particular schema revision for an Api.
    */
    public function downloadSchemaRevision(
        \Speakeasy\SpeakeasyClientSDK\Models\Operations\DownloadSchemaRevisionRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\DownloadSchemaRevisionResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/v1/apis/{apiID}/version/{versionID}/schema/{revisionID}/download', $request->pathParams);
        
        $options = ['http_errors' => false];
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\DownloadSchemaRevisionResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->schema = $serializer->deserialize((string)$httpResponse->getBody(), 'string', 'json');
            }
            if (Utils\Utils::matchContentType($contentType, 'application/x-yaml')) {
                $response->schema = $httpResponse->getBody()->getContents();
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
     * getSchema - Get information about the latest schema.
     *
     * Returns information about the last uploaded schema for a particular API version. 
     * This won't include the schema itself, that can be retrieved via the downloadSchema operation.
    */
    public function getSchema(
        \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/v1/apis/{apiID}/version/{versionID}/schema', $request->pathParams);
        
        $options = ['http_errors' => false];
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->schema = $serializer->deserialize((string)$httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\Schema', 'json');
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
     * getSchemaDiff - Get a diff of two schema revisions for an Api.
    */
    public function getSchemaDiff(
        \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaDiffRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaDiffResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/v1/apis/{apiID}/version/{versionID}/schema/{baseRevisionID}/diff/{targetRevisionID}', $request->pathParams);
        
        $options = ['http_errors' => false];
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaDiffResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->schemaDiff = $serializer->deserialize((string)$httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\SchemaDiff', 'json');
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
     * getSchemaRevision - Get information about a particular schema revision for an Api.
     *
     * Returns information about the last uploaded schema for a particular schema revision. 
     * This won't include the schema itself, that can be retrieved via the downloadSchema operation.
    */
    public function getSchemaRevision(
        \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaRevisionRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaRevisionResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/v1/apis/{apiID}/version/{versionID}/schema/{revisionID}', $request->pathParams);
        
        $options = ['http_errors' => false];
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemaRevisionResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->schema = $serializer->deserialize((string)$httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Shared\Schema', 'json');
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
     * getSchemas - Get information about all schemas associated with a particular apiID.
     *
     * Returns information the schemas associated with a particular apiID. 
     * This won't include the schemas themselves, they can be retrieved via the downloadSchema operation.
    */
    public function getSchemas(
        \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemasRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemasResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/v1/apis/{apiID}/version/{versionID}/schemas', $request->pathParams);
        
        $options = ['http_errors' => false];
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetSchemasResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->schemata = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Speakeasy\SpeakeasyClientSDK\Models\Shared\Schema>', 'json');
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
     * registerSchema - Register a schema.
     *
     * Allows uploading a schema for a particular API version.
     * This will be used to populate ApiEndpoints and used as a base for any schema generation if present.
    */
    public function registerSchema(
        \Speakeasy\SpeakeasyClientSDK\Models\Operations\RegisterSchemaRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\RegisterSchemaResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/v1/apis/{apiID}/version/{versionID}/schema', $request->pathParams);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request);
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\RegisterSchemaResponse();
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
}