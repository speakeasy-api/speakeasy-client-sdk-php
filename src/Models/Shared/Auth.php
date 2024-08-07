<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


class Auth
{
    #[\JMS\Serializer\Annotation\SerializedName('header')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $header;

    #[\JMS\Serializer\Annotation\SerializedName('secret')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $secret;

    public function __construct()
    {
        $this->header = '';
        $this->secret = '';
    }
}