<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** RemoteDocument - A document hosted in the registry */
class RemoteDocument
{
    /**
     *
     * @var string $registryUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('registry_url')]
    public string $registryUrl;

    /**
     * @param  string  $registryUrl
     */
    public function __construct(string $registryUrl)
    {
        $this->registryUrl = $registryUrl;
    }
}