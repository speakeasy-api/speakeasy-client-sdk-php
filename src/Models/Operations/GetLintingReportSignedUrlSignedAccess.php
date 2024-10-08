<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;


/** GetLintingReportSignedUrlSignedAccess - OK */
class GetLintingReportSignedUrlSignedAccess
{
    /**
     *
     * @var string $url
     */
    #[\JMS\Serializer\Annotation\SerializedName('url')]
    public string $url;

    /**
     * @param  string  $url
     */
    public function __construct(string $url)
    {
        $this->url = $url;
    }
}