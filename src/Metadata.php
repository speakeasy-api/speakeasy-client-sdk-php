<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK;

class Metadata 
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
     * deleteVersionMetadata - Delete metadata for a particular apiID and versionID.
    */
    public function deleteVersionMetadata(\Speakeasy\SpeakeasyClientSDK\models\operations\DeleteVersionMetadataRequest $request): \Speakeasy\SpeakeasyClientSDK\models\operations\DeleteVersionMetadataResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = utils\Utils::generateURL($baseUrl, '/v1/apis/{apiID}/version/{versionID}/metadata/{metaKey}/{metaValue}', $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $client = $this->_securityClient;
        
        $httpRes = $client->request('DELETE', $url, $options);

        $contentType = $httpRes->getHeader('Content-Type')[0] ?? '';

        $res = new \Speakeasy\SpeakeasyClientSDK\models\operations\DeleteVersionMetadataResponse();
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
     * getVersionMetadata - Get all metadata for a particular apiID and versionID.
    */
    public function getVersionMetadata(\Speakeasy\SpeakeasyClientSDK\models\operations\GetVersionMetadataRequest $request): \Speakeasy\SpeakeasyClientSDK\models\operations\GetVersionMetadataResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = utils\Utils::generateURL($baseUrl, '/v1/apis/{apiID}/version/{versionID}/metadata', $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $client = $this->_securityClient;
        
        $httpRes = $client->request('GET', $url, $options);

        $contentType = $httpRes->getHeader('Content-Type')[0] ?? '';

        $res = new \Speakeasy\SpeakeasyClientSDK\models\operations\GetVersionMetadataResponse();
        $res->statusCode = $httpRes->getStatusCode();
        $res->contentType = $contentType;
        
        if ($httpRes->getStatusCode() == 200) {
            if (utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = utils\JSON::createSerializer();
                $res->versionMetadata = $serializer->deserialize($httpRes->getBody()->__toString(), 'array<Speakeasy\SpeakeasyClientSDK\models\shared\VersionMetadata>', 'json');
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
     * insertVersionMetadata - Insert metadata for a particular apiID and versionID.
    */
    public function insertVersionMetadata(\Speakeasy\SpeakeasyClientSDK\models\operations\InsertVersionMetadataRequest $request): \Speakeasy\SpeakeasyClientSDK\models\operations\InsertVersionMetadataResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = utils\Utils::generateURL($baseUrl, '/v1/apis/{apiID}/version/{versionID}/metadata', $request->pathParams);
        
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

        $res = new \Speakeasy\SpeakeasyClientSDK\models\operations\InsertVersionMetadataResponse();
        $res->statusCode = $httpRes->getStatusCode();
        $res->contentType = $contentType;
        
        if ($httpRes->getStatusCode() == 200) {
            if (utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = utils\JSON::createSerializer();
                $res->versionMetadata = $serializer->deserialize($httpRes->getBody()->__toString(), 'Speakeasy\SpeakeasyClientSDK\models\shared\VersionMetadata', 'json');
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