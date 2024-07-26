<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
/** RegisterSchemaRequestBody - The schema file to upload provided as a multipart/form-data file segment. */
class RegisterSchemaRequestBody
{
    #[SpeakeasyMetadata('multipartForm:file=true')]
    public RegisterSchemaFile $file;

    public function __construct()
    {
        $this->file = new \Speakeasy\SpeakeasyClientSDK\Models\Operations\RegisterSchemaFile();
    }
}