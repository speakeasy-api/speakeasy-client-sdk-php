<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp;

class Schemas 
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
     * deleteSchema - Delete a particular schema revision for an Api.
    */
    public function deleteSchema(\Speakeasy\SpeakeasyClientSdkPhp\models\operations\DeleteSchemaRequest $request): \Speakeasy\SpeakeasyClientSdkPhp\models\operations\DeleteSchemaResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = utils\Utils::generateURL($baseUrl, '/v1/apis/{apiID}/version/{versionID}/schema/{revisionID}', $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $client = $this->_securityClient;
        
        $httpRes = $client->request('DELETE', $url, $options);

        $contentType = $httpRes->getHeader('Content-Type')[0] ?? '';

        $res = new \Speakeasy\SpeakeasyClientSdkPhp\models\operations\DeleteSchemaResponse();
        $res->statusCode = $httpRes->getStatusCode();
        $res->contentType = $contentType;
        
        if ($httpRes->getStatusCode() == 200) {
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
     * downloadSchema - Download the latest schema for a particular apiID.
    */
    public function downloadSchema(\Speakeasy\SpeakeasyClientSdkPhp\models\operations\DownloadSchemaRequest $request): \Speakeasy\SpeakeasyClientSdkPhp\models\operations\DownloadSchemaResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = utils\Utils::generateURL($baseUrl, '/v1/apis/{apiID}/version/{versionID}/schema/download', $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $client = $this->_securityClient;
        
        $httpRes = $client->request('GET', $url, $options);

        $contentType = $httpRes->getHeader('Content-Type')[0] ?? '';

        $res = new \Speakeasy\SpeakeasyClientSdkPhp\models\operations\DownloadSchemaResponse();
        $res->statusCode = $httpRes->getStatusCode();
        $res->contentType = $contentType;
        
        if ($httpRes->getStatusCode() == 200) {
            if (utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = utils\JSON::createSerializer();
                $res->schema = $serializer->deserialize($httpRes->getBody()->__toString(), 'string', 'json');
            }
            if (utils\Utils::matchContentType($contentType, 'application/x-yaml')) {
                $res->schema = $httpRes->getBody()->getContents();
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
     * downloadSchemaRevision - Download a particular schema revision for an Api.
    */
    public function downloadSchemaRevision(\Speakeasy\SpeakeasyClientSdkPhp\models\operations\DownloadSchemaRevisionRequest $request): \Speakeasy\SpeakeasyClientSdkPhp\models\operations\DownloadSchemaRevisionResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = utils\Utils::generateURL($baseUrl, '/v1/apis/{apiID}/version/{versionID}/schema/{revisionID}/download', $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $client = $this->_securityClient;
        
        $httpRes = $client->request('GET', $url, $options);

        $contentType = $httpRes->getHeader('Content-Type')[0] ?? '';

        $res = new \Speakeasy\SpeakeasyClientSdkPhp\models\operations\DownloadSchemaRevisionResponse();
        $res->statusCode = $httpRes->getStatusCode();
        $res->contentType = $contentType;
        
        if ($httpRes->getStatusCode() == 200) {
            if (utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = utils\JSON::createSerializer();
                $res->schema = $serializer->deserialize($httpRes->getBody()->__toString(), 'string', 'json');
            }
            if (utils\Utils::matchContentType($contentType, 'application/x-yaml')) {
                $res->schema = $httpRes->getBody()->getContents();
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
     * getSchema - Get information about the latest schema.
     *
     * Returns information about the last uploaded schema for a particular API version. 
     * This won't include the schema itself, that can be retrieved via the downloadSchema operation.
    */
    public function getSchema(\Speakeasy\SpeakeasyClientSdkPhp\models\operations\GetSchemaRequest $request): \Speakeasy\SpeakeasyClientSdkPhp\models\operations\GetSchemaResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = utils\Utils::generateURL($baseUrl, '/v1/apis/{apiID}/version/{versionID}/schema', $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $client = $this->_securityClient;
        
        $httpRes = $client->request('GET', $url, $options);

        $contentType = $httpRes->getHeader('Content-Type')[0] ?? '';

        $res = new \Speakeasy\SpeakeasyClientSdkPhp\models\operations\GetSchemaResponse();
        $res->statusCode = $httpRes->getStatusCode();
        $res->contentType = $contentType;
        
        if ($httpRes->getStatusCode() == 200) {
            if (utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = utils\JSON::createSerializer();
                $res->schema = $serializer->deserialize($httpRes->getBody()->__toString(), 'Speakeasy\SpeakeasyClientSdkPhp\models\shared\Schema', 'json');
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
     * getSchemaDiff - Get a diff of two schema revisions for an Api.
    */
    public function getSchemaDiff(\Speakeasy\SpeakeasyClientSdkPhp\models\operations\GetSchemaDiffRequest $request): \Speakeasy\SpeakeasyClientSdkPhp\models\operations\GetSchemaDiffResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = utils\Utils::generateURL($baseUrl, '/v1/apis/{apiID}/version/{versionID}/schema/{baseRevisionID}/diff/{targetRevisionID}', $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $client = $this->_securityClient;
        
        $httpRes = $client->request('GET', $url, $options);

        $contentType = $httpRes->getHeader('Content-Type')[0] ?? '';

        $res = new \Speakeasy\SpeakeasyClientSdkPhp\models\operations\GetSchemaDiffResponse();
        $res->statusCode = $httpRes->getStatusCode();
        $res->contentType = $contentType;
        
        if ($httpRes->getStatusCode() == 200) {
            if (utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = utils\JSON::createSerializer();
                $res->schemaDiff = $serializer->deserialize($httpRes->getBody()->__toString(), 'Speakeasy\SpeakeasyClientSdkPhp\models\shared\SchemaDiff', 'json');
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
     * getSchemaRevision - Get information about a particular schema revision for an Api.
     *
     * Returns information about the last uploaded schema for a particular schema revision. 
     * This won't include the schema itself, that can be retrieved via the downloadSchema operation.
    */
    public function getSchemaRevision(\Speakeasy\SpeakeasyClientSdkPhp\models\operations\GetSchemaRevisionRequest $request): \Speakeasy\SpeakeasyClientSdkPhp\models\operations\GetSchemaRevisionResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = utils\Utils::generateURL($baseUrl, '/v1/apis/{apiID}/version/{versionID}/schema/{revisionID}', $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $client = $this->_securityClient;
        
        $httpRes = $client->request('GET', $url, $options);

        $contentType = $httpRes->getHeader('Content-Type')[0] ?? '';

        $res = new \Speakeasy\SpeakeasyClientSdkPhp\models\operations\GetSchemaRevisionResponse();
        $res->statusCode = $httpRes->getStatusCode();
        $res->contentType = $contentType;
        
        if ($httpRes->getStatusCode() == 200) {
            if (utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = utils\JSON::createSerializer();
                $res->schema = $serializer->deserialize($httpRes->getBody()->__toString(), 'Speakeasy\SpeakeasyClientSdkPhp\models\shared\Schema', 'json');
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
     * getSchemas - Get information about all schemas associated with a particular apiID.
     *
     * Returns information the schemas associated with a particular apiID. 
     * This won't include the schemas themselves, they can be retrieved via the downloadSchema operation.
    */
    public function getSchemas(\Speakeasy\SpeakeasyClientSdkPhp\models\operations\GetSchemasRequest $request): \Speakeasy\SpeakeasyClientSdkPhp\models\operations\GetSchemasResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = utils\Utils::generateURL($baseUrl, '/v1/apis/{apiID}/version/{versionID}/schemas', $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $client = $this->_securityClient;
        
        $httpRes = $client->request('GET', $url, $options);

        $contentType = $httpRes->getHeader('Content-Type')[0] ?? '';

        $res = new \Speakeasy\SpeakeasyClientSdkPhp\models\operations\GetSchemasResponse();
        $res->statusCode = $httpRes->getStatusCode();
        $res->contentType = $contentType;
        
        if ($httpRes->getStatusCode() == 200) {
            if (utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = utils\JSON::createSerializer();
                $res->schemata = $serializer->deserialize($httpRes->getBody()->__toString(), 'array<Speakeasy\SpeakeasyClientSdkPhp\models\shared\Schema>', 'json');
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
     * registerSchema - Register a schema.
     *
     * Allows uploading a schema for a particular API version.
     * This will be used to populate ApiEndpoints and used as a base for any schema generation if present.
    */
    public function registerSchema(\Speakeasy\SpeakeasyClientSdkPhp\models\operations\RegisterSchemaRequest $request): \Speakeasy\SpeakeasyClientSdkPhp\models\operations\RegisterSchemaResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = utils\Utils::generateURL($baseUrl, '/v1/apis/{apiID}/version/{versionID}/schema', $request->pathParams);
        
        $options = ['http_errors' => false];
        $body = utils\Utils::serializeRequestBody($request);
        if (is_null($body)) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $client = $this->_securityClient;
        
        $httpRes = $client->request('POST', $url, $options);

        $contentType = $httpRes->getHeader('Content-Type')[0] ?? '';

        $res = new \Speakeasy\SpeakeasyClientSdkPhp\models\operations\RegisterSchemaResponse();
        $res->statusCode = $httpRes->getStatusCode();
        $res->contentType = $contentType;
        
        if ($httpRes->getStatusCode() == 200) {
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