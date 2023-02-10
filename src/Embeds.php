<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK;

class Embeds 
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
     * getEmbedAccessToken - Get an embed access token for the current workspace.
     *
     * Returns an embed access token for the current workspace. This can be used to authenticate access to externally embedded content.
     * Filters can be applied allowing views to be filtered to things like particular customerIds.
    */
    public function getEmbedAccessToken(\Speakeasy\SpeakeasyClientSDK\models\operations\GetEmbedAccessTokenRequest $request): \Speakeasy\SpeakeasyClientSDK\models\operations\GetEmbedAccessTokenResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = utils\Utils::generateURL($baseUrl, '/v1/workspace/embed-access-token');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, utils\Utils::getQueryParams($request->queryParams));
        
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $client = $this->_securityClient;
        
        $httpRes = $client->request('GET', $url, $options);

        $contentType = $httpRes->getHeader('Content-Type')[0] ?? '';

        $res = new \Speakeasy\SpeakeasyClientSDK\models\operations\GetEmbedAccessTokenResponse();
        $res->statusCode = $httpRes->getStatusCode();
        $res->contentType = $contentType;
        
        if ($httpRes->getStatusCode() == 200) {
            if (utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = utils\JSON::createSerializer();
                $res->embedAccessTokenResponse = $serializer->deserialize($httpRes->getBody()->__toString(), 'Speakeasy\SpeakeasyClientSDK\models\shared\EmbedAccessTokenResponse', 'json');
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
     * getValidEmbedAccessTokens - Get all valid embed access tokens for the current workspace.
    */
    public function getValidEmbedAccessTokens(): \Speakeasy\SpeakeasyClientSDK\models\operations\GetValidEmbedAccessTokensResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = utils\Utils::generateURL($baseUrl, '/v1/workspace/embed-access-tokens/valid');
        
        $options = ['http_errors' => false];
        
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $client = $this->_securityClient;
        
        $httpRes = $client->request('GET', $url, $options);

        $contentType = $httpRes->getHeader('Content-Type')[0] ?? '';

        $res = new \Speakeasy\SpeakeasyClientSDK\models\operations\GetValidEmbedAccessTokensResponse();
        $res->statusCode = $httpRes->getStatusCode();
        $res->contentType = $contentType;
        
        if ($httpRes->getStatusCode() == 200) {
            if (utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = utils\JSON::createSerializer();
                $res->embedTokens = $serializer->deserialize($httpRes->getBody()->__toString(), 'array<Speakeasy\SpeakeasyClientSDK\models\shared\EmbedToken>', 'json');
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
     * revokeEmbedAccessToken - Revoke an embed access EmbedToken.
    */
    public function revokeEmbedAccessToken(\Speakeasy\SpeakeasyClientSDK\models\operations\RevokeEmbedAccessTokenRequest $request): \Speakeasy\SpeakeasyClientSDK\models\operations\RevokeEmbedAccessTokenResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = utils\Utils::generateURL($baseUrl, '/v1/workspace/embed-access-tokens/{tokenID}', $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $client = $this->_securityClient;
        
        $httpRes = $client->request('DELETE', $url, $options);

        $contentType = $httpRes->getHeader('Content-Type')[0] ?? '';

        $res = new \Speakeasy\SpeakeasyClientSDK\models\operations\RevokeEmbedAccessTokenResponse();
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
}