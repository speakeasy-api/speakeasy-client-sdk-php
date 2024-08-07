<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK;

class Reports
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
     * Get the signed access url for the change reports for a particular document.
     *
     * @param  \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetChangesReportSignedUrlRequest  $request
     * @return \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetChangesReportSignedUrlResponse
     */
    public function getChangesReportSignedUrl(
        ?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetChangesReportSignedUrlRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetChangesReportSignedUrlResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/reports/changes/{documentChecksum}', \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetChangesReportSignedUrlRequest::class, $request, $this->sdkConfiguration->globals);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetChangesReportSignedUrlResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->signedAccess = $serializer->deserialize((string) $httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Operations\GetChangesReportSignedUrlSignedAccess', 'json');
            }
        }

        return $response;
    }

    /**
     * Get the signed access url for the linting reports for a particular document.
     *
     * @param  \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetLintingReportSignedUrlRequest  $request
     * @return \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetLintingReportSignedUrlResponse
     */
    public function getLintingReportSignedUrl(
        ?\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetLintingReportSignedUrlRequest $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetLintingReportSignedUrlResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/reports/linting/{documentChecksum}', \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetLintingReportSignedUrlRequest::class, $request, $this->sdkConfiguration->globals);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\GetLintingReportSignedUrlResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->signedAccess = $serializer->deserialize((string) $httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Operations\GetLintingReportSignedUrlSignedAccess', 'json');
            }
        }

        return $response;
    }

    /**
     * Upload a report.
     *
     * @param  \Speakeasy\SpeakeasyClientSDK\Models\Operations\UploadReportRequestBody  $request
     * @return \Speakeasy\SpeakeasyClientSDK\Models\Operations\UploadReportResponse
     */
    public function uploadReport(
        \Speakeasy\SpeakeasyClientSDK\Models\Operations\UploadReportRequestBody $request,
    ): \Speakeasy\SpeakeasyClientSDK\Models\Operations\UploadReportResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/reports');
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'request', 'multipart');
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\UploadReportResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->uploadedReport = $serializer->deserialize((string) $httpResponse->getBody(), 'Speakeasy\SpeakeasyClientSDK\Models\Operations\UploadReportUploadedReport', 'json');
            }
        }

        return $response;
    }
}