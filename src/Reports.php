<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK;

use JMS\Serializer\DeserializationContext;
use Speakeasy\SpeakeasyClientSDK\Models\Operations;

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
     * @param  Operations\GetChangesReportSignedUrlRequest  $request
     * @return Operations\GetChangesReportSignedUrlResponse
     * @throws \Speakeasy\SpeakeasyClientSDK\Models\Errors\SDKException
     */
    public function getChangesReportSignedUrl(
        ?Operations\GetChangesReportSignedUrlRequest $request,
    ): Operations\GetChangesReportSignedUrlResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/reports/changes/{documentChecksum}', Operations\GetChangesReportSignedUrlRequest::class, $request, $this->sdkConfiguration->globals);
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
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetChangesReportSignedUrlSignedAccess', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetChangesReportSignedUrlResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    signedAccess: $obj);

                return $response;
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Get the signed access url for the linting reports for a particular document.
     *
     * @param  Operations\GetLintingReportSignedUrlRequest  $request
     * @return Operations\GetLintingReportSignedUrlResponse
     * @throws \Speakeasy\SpeakeasyClientSDK\Models\Errors\SDKException
     */
    public function getLintingReportSignedUrl(
        ?Operations\GetLintingReportSignedUrlRequest $request,
    ): Operations\GetLintingReportSignedUrlResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/reports/linting/{documentChecksum}', Operations\GetLintingReportSignedUrlRequest::class, $request, $this->sdkConfiguration->globals);
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
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Speakeasy\SpeakeasyClientSDK\Models\Operations\GetLintingReportSignedUrlSignedAccess', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetLintingReportSignedUrlResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    signedAccess: $obj);

                return $response;
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Upload a report.
     *
     * @param  Operations\UploadReportRequestBody  $request
     * @return Operations\UploadReportResponse
     * @throws \Speakeasy\SpeakeasyClientSDK\Models\Errors\SDKException
     */
    public function uploadReport(
        Operations\UploadReportRequestBody $request,
    ): Operations\UploadReportResponse {
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
        $httpRequest = new \GuzzleHttp\Psr7\Request('POST', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Speakeasy\SpeakeasyClientSDK\Models\Operations\UploadReportUploadedReport', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\UploadReportResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    uploadedReport: $obj);

                return $response;
            } else {
                throw new \Speakeasy\SpeakeasyClientSDK\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \Speakeasy\SpeakeasyClientSDK\Models\Errors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

}