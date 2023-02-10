<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSdkPhp;

class Apis 
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
     * deleteApi - Delete an Api.
     *
     * Delete a particular version of an Api. The will also delete all associated ApiEndpoints, Metadata, Schemas & Request Logs (if using a Postgres datastore).
    */
    public function deleteApi(\Speakeasy\SpeakeasyClientSdkPhp\models\operations\DeleteApiRequest $request): \Speakeasy\SpeakeasyClientSdkPhp\models\operations\DeleteApiResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = utils\Utils::generateURL($baseUrl, '/v1/apis/{apiID}/version/{versionID}', $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $client = $this->_securityClient;
        
        $httpRes = $client->request('DELETE', $url, $options);

        $contentType = $httpRes->getHeader('Content-Type')[0] ?? '';

        $res = new \Speakeasy\SpeakeasyClientSdkPhp\models\operations\DeleteApiResponse();
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
     * generateOpenApiSpec - Generate an OpenAPI specification for a particular Api.
     *
     * This endpoint will generate any missing operations in any registered OpenAPI document if the operation does not already exist in the document.
     * Returns the original document and the newly generated document allowing a diff to be performed to see what has changed.
    */
    public function generateOpenApiSpec(\Speakeasy\SpeakeasyClientSdkPhp\models\operations\GenerateOpenApiSpecRequest $request): \Speakeasy\SpeakeasyClientSdkPhp\models\operations\GenerateOpenApiSpecResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = utils\Utils::generateURL($baseUrl, '/v1/apis/{apiID}/version/{versionID}/generate/openapi', $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $client = $this->_securityClient;
        
        $httpRes = $client->request('GET', $url, $options);

        $contentType = $httpRes->getHeader('Content-Type')[0] ?? '';

        $res = new \Speakeasy\SpeakeasyClientSdkPhp\models\operations\GenerateOpenApiSpecResponse();
        $res->statusCode = $httpRes->getStatusCode();
        $res->contentType = $contentType;
        
        if ($httpRes->getStatusCode() == 200) {
            if (utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = utils\JSON::createSerializer();
                $res->generateOpenApiSpecDiff = $serializer->deserialize($httpRes->getBody()->__toString(), 'Speakeasy\SpeakeasyClientSdkPhp\models\shared\GenerateOpenApiSpecDiff', 'json');
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
     * generatePostmanCollection - Generate a Postman collection for a particular Api.
     *
     * Generates a postman collection containing all endpoints for a particular API. Includes variables produced for any path/query/header parameters included in the OpenAPI document.
    */
    public function generatePostmanCollection(\Speakeasy\SpeakeasyClientSdkPhp\models\operations\GeneratePostmanCollectionRequest $request): \Speakeasy\SpeakeasyClientSdkPhp\models\operations\GeneratePostmanCollectionResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = utils\Utils::generateURL($baseUrl, '/v1/apis/{apiID}/version/{versionID}/generate/postman', $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $client = $this->_securityClient;
        
        $httpRes = $client->request('GET', $url, $options);

        $contentType = $httpRes->getHeader('Content-Type')[0] ?? '';

        $res = new \Speakeasy\SpeakeasyClientSdkPhp\models\operations\GeneratePostmanCollectionResponse();
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
     * getAllApiVersions - Get all Api versions for a particular ApiEndpoint.
     *
     * Get all Api versions for a particular ApiEndpoint.
     * Supports filtering the versions based on metadata attributes.
    */
    public function getAllApiVersions(\Speakeasy\SpeakeasyClientSdkPhp\models\operations\GetAllApiVersionsRequest $request): \Speakeasy\SpeakeasyClientSdkPhp\models\operations\GetAllApiVersionsResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = utils\Utils::generateURL($baseUrl, '/v1/apis/{apiID}', $request->pathParams);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, utils\Utils::getQueryParams($request->queryParams));
        
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $client = $this->_securityClient;
        
        $httpRes = $client->request('GET', $url, $options);

        $contentType = $httpRes->getHeader('Content-Type')[0] ?? '';

        $res = new \Speakeasy\SpeakeasyClientSdkPhp\models\operations\GetAllApiVersionsResponse();
        $res->statusCode = $httpRes->getStatusCode();
        $res->contentType = $contentType;
        
        if ($httpRes->getStatusCode() == 200) {
            if (utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = utils\JSON::createSerializer();
                $res->apis = $serializer->deserialize($httpRes->getBody()->__toString(), 'array<Speakeasy\SpeakeasyClientSdkPhp\models\shared\Api>', 'json');
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
     * getApis - Get a list of Apis for a given workspace
     *
     * Get a list of all Apis and their versions for a given workspace.
     * Supports filtering the APIs based on metadata attributes.
    */
    public function getApis(\Speakeasy\SpeakeasyClientSdkPhp\models\operations\GetApisRequest $request): \Speakeasy\SpeakeasyClientSdkPhp\models\operations\GetApisResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = utils\Utils::generateURL($baseUrl, '/v1/apis');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, utils\Utils::getQueryParams($request->queryParams));
        
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $client = $this->_securityClient;
        
        $httpRes = $client->request('GET', $url, $options);

        $contentType = $httpRes->getHeader('Content-Type')[0] ?? '';

        $res = new \Speakeasy\SpeakeasyClientSdkPhp\models\operations\GetApisResponse();
        $res->statusCode = $httpRes->getStatusCode();
        $res->contentType = $contentType;
        
        if ($httpRes->getStatusCode() == 200) {
            if (utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = utils\JSON::createSerializer();
                $res->apis = $serializer->deserialize($httpRes->getBody()->__toString(), 'array<Speakeasy\SpeakeasyClientSdkPhp\models\shared\Api>', 'json');
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
     * upsertApi - Upsert an Api
     *
     * Upsert an Api. If the Api does not exist, it will be created.
     * If the Api exists, it will be updated.
    */
    public function upsertApi(\Speakeasy\SpeakeasyClientSdkPhp\models\operations\UpsertApiRequest $request): \Speakeasy\SpeakeasyClientSdkPhp\models\operations\UpsertApiResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = utils\Utils::generateURL($baseUrl, '/v1/apis/{apiID}', $request->pathParams);
        
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

        $res = new \Speakeasy\SpeakeasyClientSdkPhp\models\operations\UpsertApiResponse();
        $res->statusCode = $httpRes->getStatusCode();
        $res->contentType = $contentType;
        
        if ($httpRes->getStatusCode() == 200) {
            if (utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = utils\JSON::createSerializer();
                $res->api = $serializer->deserialize($httpRes->getBody()->__toString(), 'Speakeasy\SpeakeasyClientSdkPhp\models\shared\Api', 'json');
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