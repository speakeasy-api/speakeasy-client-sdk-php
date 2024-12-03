<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


class RemoteSourceSubscriptionSettings
{
    /**
     * $baseSpecNamespaces
     *
     * @var array<string> $baseSpecNamespaces
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('base_spec_namespaces')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>')]
    public array $baseSpecNamespaces;

    /**
     *
     * @var string $outputNamespace
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('output_namespace')]
    public string $outputNamespace;

    /**
     * $overlayNamespaces
     *
     * @var array<string> $overlayNamespaces
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('overlay_namespaces')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>')]
    public array $overlayNamespaces;

    /**
     * @param  array<string>  $baseSpecNamespaces
     * @param  string  $outputNamespace
     * @param  array<string>  $overlayNamespaces
     */
    public function __construct(array $baseSpecNamespaces, string $outputNamespace, array $overlayNamespaces)
    {
        $this->baseSpecNamespaces = $baseSpecNamespaces;
        $this->outputNamespace = $outputNamespace;
        $this->overlayNamespaces = $overlayNamespaces;
    }
}