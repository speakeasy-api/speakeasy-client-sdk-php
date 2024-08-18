<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** GithubConfigureCodeSamplesResponse - A response to configure GitHub code samples */
class GithubConfigureCodeSamplesResponse
{
    /**
     * The URL of the code sample overlay registry
     *
     * @var string $codeSampleOverlayRegistryURL
     */
    #[\JMS\Serializer\Annotation\SerializedName('codeSampleOverlayRegistryURL')]
    public string $codeSampleOverlayRegistryURL;

    /**
     * The ID of the GitHub action that was dispatched
     *
     * @var ?string $ghActionID
     */
    #[\JMS\Serializer\Annotation\SerializedName('ghActionID')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $ghActionID = null;

    /**
     * A document referenced by a workflow
     *
     * @var WorkflowDocument $source
     */
    #[\JMS\Serializer\Annotation\SerializedName('source')]
    #[\JMS\Serializer\Annotation\Type('\Speakeasy\SpeakeasyClientSDK\Models\Shared\WorkflowDocument')]
    public WorkflowDocument $source;

    /**
     * @param  ?string  $codeSampleOverlayRegistryURL
     * @param  ?WorkflowDocument  $source
     * @param  ?string  $ghActionID
     */
    public function __construct(?string $codeSampleOverlayRegistryURL = null, ?WorkflowDocument $source = null, ?string $ghActionID = null)
    {
        $this->codeSampleOverlayRegistryURL = $codeSampleOverlayRegistryURL;
        $this->source = $source;
        $this->ghActionID = $ghActionID;
    }
}