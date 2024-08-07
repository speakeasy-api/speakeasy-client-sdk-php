<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class RegisterSchemaFile
{
    #[SpeakeasyMetadata('multipartForm:content=true')]
    public string $content;

    #[SpeakeasyMetadata('multipartForm:name=file')]
    public string $fileName;

    public function __construct()
    {
        $this->content = '';
        $this->fileName = '';
    }
}