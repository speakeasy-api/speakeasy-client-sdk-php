<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK;

use JMS\Serializer\DeserializationContext;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;

class Schemas
{
    private SDKConfiguration $sdkConfiguration;
    /**
     * @param  SDKConfiguration  $sdkConfig
     */
    public function __construct(SDKConfiguration $sdkConfig)
    {
        $this->sdkConfiguration = $sdkConfig;
    }

    /**
     * Delete a particular schema revision for an Api.
     *
     * @param  Operations\DeleteSchemaRequest  $request
     * @return Operations\DeleteSchemaResponse
     * @throws \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException
     */
    public function deleteSchema(
        ?Operations\DeleteSchemaRequest $request,
    ): Operations\DeleteSchemaResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}/schema/{revisionID}', Operations\DeleteSchemaRequest::class, $request, $this->sdkConfiguration->globals);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('DELETE', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            return new Operations\DeleteSchemaResponse(
                statusCode: $statusCode,
                contentType: $contentType,
                rawResponse: $httpResponse
            );
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Speakeasy\SpeakeasyClientSDK\Models\Errorors\Error', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\DeleteSchemaResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    error: $obj);

                return $response;
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        }
    }

    /**
     * Download the latest schema for a particular apiID.
     *
     * @param  Operations\DownloadSchemaRequest  $request
     * @return Operations\DownloadSchemaResponse
     * @throws \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException
     */
    public function downloadSchema(
        ?Operations\DownloadSchemaRequest $request,
    ): Operations\DownloadSchemaResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}/schema/download', Operations\DownloadSchemaRequest::class, $request, $this->sdkConfiguration->globals);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json;q=1, application/x-yaml;q=0';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\DownloadSchemaResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    twoHundredApplicationJsonSchema: $obj);
            } elseif (Utils\Utils::matchContentType($contentType, 'application/x-yaml')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\DownloadSchemaResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    twoHundredApplicationXYamlSchema: $obj);
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Speakeasy\SpeakeasyClientSDK\Models\Errorors\Error', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\DownloadSchemaResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    error: $obj);

                return $response;
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        }
    }

    /**
     * Download a particular schema revision for an Api.
     *
     * @param  Operations\DownloadSchemaRevisionRequest  $request
     * @return Operations\DownloadSchemaRevisionResponse
     * @throws \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException
     */
    public function downloadSchemaRevision(
        ?Operations\DownloadSchemaRevisionRequest $request,
    ): Operations\DownloadSchemaRevisionResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}/schema/{revisionID}/download', Operations\DownloadSchemaRevisionRequest::class, $request, $this->sdkConfiguration->globals);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json;q=1, application/x-yaml;q=0';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\DownloadSchemaRevisionResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    twoHundredApplicationJsonSchema: $obj);
            } elseif (Utils\Utils::matchContentType($contentType, 'application/x-yaml')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\DownloadSchemaRevisionResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    twoHundredApplicationXYamlSchema: $obj);
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Speakeasy\SpeakeasyClientSDK\Models\Errorors\Error', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\DownloadSchemaRevisionResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    error: $obj);

                return $response;
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        }
    }

    /**
     * Get information about the latest schema.
     *
     * Returns information about the last uploaded schema for a particular API version. 
     * This won't include the schema itself, that can be retrieved via the downloadSchema operation.
     *
     * @param  Operations\GetSchemaRequest  $request
     * @return Operations\GetSchemaResponse
     * @throws \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException
     */
    public function getSchema(
        ?Operations\GetSchemaRequest $request,
    ): Operations\GetSchemaResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}/schema', Operations\GetSchemaRequest::class, $request, $this->sdkConfiguration->globals);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Speakeasy\SpeakeasyClientSDK\Models\Shared\Schema', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetSchemaResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    schema: $obj);

                return $response;
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Speakeasy\SpeakeasyClientSDK\Models\Errorors\Error', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetSchemaResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    error: $obj);

                return $response;
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        }
    }

    /**
     * Get a diff of two schema revisions for an Api.
     *
     * @param  Operations\GetSchemaDiffRequest  $request
     * @return Operations\GetSchemaDiffResponse
     * @throws \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException
     */
    public function getSchemaDiff(
        ?Operations\GetSchemaDiffRequest $request,
    ): Operations\GetSchemaDiffResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}/schema/{baseRevisionID}/diff/{targetRevisionID}', Operations\GetSchemaDiffRequest::class, $request, $this->sdkConfiguration->globals);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Speakeasy\SpeakeasyClientSDK\Models\Shared\SchemaDiff', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetSchemaDiffResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    schemaDiff: $obj);

                return $response;
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Speakeasy\SpeakeasyClientSDK\Models\Errorors\Error', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetSchemaDiffResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    error: $obj);

                return $response;
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        }
    }

    /**
     * Get information about a particular schema revision for an Api.
     *
     * Returns information about the last uploaded schema for a particular schema revision. 
     * This won't include the schema itself, that can be retrieved via the downloadSchema operation.
     *
     * @param  Operations\GetSchemaRevisionRequest  $request
     * @return Operations\GetSchemaRevisionResponse
     * @throws \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException
     */
    public function getSchemaRevision(
        ?Operations\GetSchemaRevisionRequest $request,
    ): Operations\GetSchemaRevisionResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}/schema/{revisionID}', Operations\GetSchemaRevisionRequest::class, $request, $this->sdkConfiguration->globals);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Speakeasy\SpeakeasyClientSDK\Models\Shared\Schema', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetSchemaRevisionResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    schema: $obj);

                return $response;
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Speakeasy\SpeakeasyClientSDK\Models\Errorors\Error', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetSchemaRevisionResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    error: $obj);

                return $response;
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        }
    }

    /**
     * Get information about all schemas associated with a particular apiID.
     *
     * Returns information the schemas associated with a particular apiID. 
     * This won't include the schemas themselves, they can be retrieved via the downloadSchema operation.
     *
     * @param  Operations\GetSchemasRequest  $request
     * @return Operations\GetSchemasResponse
     * @throws \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException
     */
    public function getSchemas(
        ?Operations\GetSchemasRequest $request,
    ): Operations\GetSchemasResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}/schemas', Operations\GetSchemasRequest::class, $request, $this->sdkConfiguration->globals);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), 'array<\Speakeasy\SpeakeasyClientSDK\Models\Shared\Schema>', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetSchemasResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    classes: $obj);

                return $response;
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Speakeasy\SpeakeasyClientSDK\Models\Errorors\Error', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetSchemasResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    error: $obj);

                return $response;
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        }
    }

    /**
     * Register a schema.
     *
     * Allows uploading a schema for a particular API version.
     * This will be used to populate ApiEndpoints and used as a base for any schema generation if present.
     *
     * @param  Operations\RegisterSchemaRequest  $request
     * @return Operations\RegisterSchemaResponse
     * @throws \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException
     */
    public function registerSchema(
        Operations\RegisterSchemaRequest $request,
    ): Operations\RegisterSchemaResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}/schema', Operations\RegisterSchemaRequest::class, $request, $this->sdkConfiguration->globals);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'requestBody', 'multipart');
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('POST', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            return new Operations\RegisterSchemaResponse(
                statusCode: $statusCode,
                contentType: $contentType,
                rawResponse: $httpResponse
            );
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Speakeasy\SpeakeasyClientSDK\Models\Errorors\Error', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\RegisterSchemaResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    error: $obj);

                return $response;
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errorors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        }
    }

}