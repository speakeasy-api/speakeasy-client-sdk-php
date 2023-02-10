<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK;

/**
 * SDK Documentation: https://docs.speakeasyapi.dev - The Speakeasy Platform Documentation
 */
class SDK
{
	public const SERVER_PROD = 'prod';
	
	public const SERVERS = [
		SDK::SERVER_PROD => 'https://api.prod.speakeasyapi.dev',
	];
  	
  	public ApiEndpoints $apiEndpoints;
  	public Apis $apis;
  	public Embeds $embeds;
  	public Metadata $metadata;
  	public Plugins $plugins;
  	public Requests $requests;
  	public Schemas $schemas;	

	private ?\GuzzleHttp\ClientInterface $_defaultClient;
	private ?\GuzzleHttp\ClientInterface $_securityClient;
	private ?models\shared\Security $_security;
	private string $_serverUrl;
	private string $_language = "php";
	private string $_sdkVersion = "0.0.2";
	private string $_genVersion = "0.0.1";

	public static function builder(): SDKBuilder
	{
		return new SDKBuilder();
	}

	/**
	 * @param \GuzzleHttp\ClientInterface|null $client	 
	 * @param models\shared\Security|null $security
	 * @param string $serverUrl
	 * @param array<string, string>|null $params
	 */
	public function __construct(?\GuzzleHttp\ClientInterface $client, ?models\shared\Security $security, string $serverUrl, ?array $params)
	{
		$this->_defaultClient = $client;
		
		if (is_null($this->_defaultClient)) {
			$this->_defaultClient = new \GuzzleHttp\Client([
            	'timeout' => 60,
			]);
		}

		$this->_securityClient = null;
		if (!is_null($security)) {
			$this->_security = $security;
			$this->_securityClient = utils\Utils::configureSecurityClient($this->_defaultClient, $this->_security);
		}
		
		if (is_null($this->_securityClient)) {
			$this->_securityClient = $this->_defaultClient;
		}

		if (!empty($serverUrl)) {
			$this->_serverUrl = utils\Utils::replaceParameters($serverUrl, $params);
		}
		
		if (empty($this->_serverUrl)) {
			$this->_serverUrl = $this::SERVERS[SDK::SERVER_PROD];
		}
		
		$this->apiEndpoints = new ApiEndpoints(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->apis = new Apis(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->embeds = new Embeds(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->metadata = new Metadata(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->plugins = new Plugins(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->requests = new Requests(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->schemas = new Schemas(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
	}
    
    /**
     * validateApiKey - Validate the current api key.
    */
    public function validateApiKey(): \Speakeasy\SpeakeasyClientSDK\models\operations\ValidateApiKeyResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = utils\Utils::generateURL($baseUrl, '/v1/auth/validate');
        
        $options = ['http_errors' => false];
        
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $client = $this->_securityClient;
        
        $httpRes = $client->request('GET', $url, $options);

        $contentType = $httpRes->getHeader('Content-Type')[0] ?? '';

        $res = new \Speakeasy\SpeakeasyClientSDK\models\operations\ValidateApiKeyResponse();
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