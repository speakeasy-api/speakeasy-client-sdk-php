<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** SchemaDiff - A SchemaDiff represents a diff of two Schemas. */
class SchemaDiff
{
    /**
     * Holds every addition change in the diff.
     *
     * @var array<string> $additions
     */
    #[\JMS\Serializer\Annotation\SerializedName('additions')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    public array $additions;

    /**
     * Holds every deletion change in the diff.
     *
     * @var array<string> $deletions
     */
    #[\JMS\Serializer\Annotation\SerializedName('deletions')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    public array $deletions;

    /**
     * Holds every modification change in the diff.
     *
     * @var array<string, ValueChange> $modifications
     */
    #[\JMS\Serializer\Annotation\SerializedName('modifications')]
    #[\JMS\Serializer\Annotation\Type('array<string, \Speakeasy\SpeakeasyClientSDK\Models\Shared\ValueChange>')]
    public array $modifications;

    /**
     * @param  array<string>  $additions
     * @param  array<string>  $deletions
     * @param  array<string, ValueChange>  $modifications
     */
    public function __construct(array $additions, array $deletions, array $modifications)
    {
        $this->additions = $additions;
        $this->deletions = $deletions;
        $this->modifications = $modifications;
    }
}