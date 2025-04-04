<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Operations;

use Speakeasy\SpeakeasyClientSDK\Models\Shared;
use Speakeasy\SpeakeasyClientSDK\Utils\SpeakeasyMetadata;
class MethodPaths
{
    /**
     *
     * @var Shared\HttpMethod $method
     */
    #[SpeakeasyMetadata('queryParam:name=method')]
    public Shared\HttpMethod $method;

    /**
     *
     * @var string $path
     */
    #[SpeakeasyMetadata('queryParam:name=path')]
    public string $path;

    /**
     * @param  Shared\HttpMethod  $method
     * @param  string  $path
     * @phpstan-pure
     */
    public function __construct(Shared\HttpMethod $method, string $path)
    {
        $this->method = $method;
        $this->path = $path;
    }
}