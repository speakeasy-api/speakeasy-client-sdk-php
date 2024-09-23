<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


class Diagnostic
{
    /**
     * Help message for how to fix the issue
     *
     * @var ?string $helpMessage
     */
    #[\JMS\Serializer\Annotation\SerializedName('helpMessage')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $helpMessage = null;

    /**
     * Message describing the issue
     *
     * @var string $message
     */
    #[\JMS\Serializer\Annotation\SerializedName('message')]
    public string $message;

    /**
     * Schema path to the issue
     *
     * @var array<string> $path
     */
    #[\JMS\Serializer\Annotation\SerializedName('path')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    public array $path;

    /**
     * Issue type
     *
     * @var string $type
     */
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    public string $type;

    /**
     * @param  string  $message
     * @param  array<string>  $path
     * @param  string  $type
     * @param  ?string  $helpMessage
     */
    public function __construct(string $message, array $path, string $type, ?string $helpMessage = null)
    {
        $this->message = $message;
        $this->path = $path;
        $this->type = $type;
        $this->helpMessage = $helpMessage;
    }
}