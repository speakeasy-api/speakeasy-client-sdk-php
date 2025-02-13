<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


class OrganizationUsage
{
    /**
     * Indicates if the features are accessible
     *
     * @var bool $accessible
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('accessible')]
    public bool $accessible;

    /**
     * Features that are accessible
     *
     * @var array<string> $accessibleFeatures
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('accessible_features')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>')]
    public array $accessibleFeatures;

    /**
     * List of generation lock IDs
     *
     * @var array<string> $genLockIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('gen_lock_ids')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>')]
    public array $genLockIds;

    /**
     * The programming language used
     *
     * @var string $language
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('language')]
    public string $language;

    /**
     * Maximum Number of operations per SDK specific in contract
     *
     * @var int $maxOperations
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('max_operations')]
    public int $maxOperations;

    /**
     * Number of operations performed
     *
     * @var int $numberOfOperations
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('number_of_operations')]
    public int $numberOfOperations;

    /**
     * Features that have been used
     *
     * @var array<string> $usedFeatures
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('used_features')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>')]
    public array $usedFeatures;

    /**
     * List of workspace IDs
     *
     * @var array<string> $workspaces
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('workspaces')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>')]
    public array $workspaces;

    /**
     * @param  bool  $accessible
     * @param  array<string>  $accessibleFeatures
     * @param  array<string>  $genLockIds
     * @param  string  $language
     * @param  int  $maxOperations
     * @param  int  $numberOfOperations
     * @param  array<string>  $usedFeatures
     * @param  array<string>  $workspaces
     * @phpstan-pure
     */
    public function __construct(bool $accessible, array $accessibleFeatures, array $genLockIds, string $language, int $maxOperations, int $numberOfOperations, array $usedFeatures, array $workspaces)
    {
        $this->accessible = $accessible;
        $this->accessibleFeatures = $accessibleFeatures;
        $this->genLockIds = $genLockIds;
        $this->language = $language;
        $this->maxOperations = $maxOperations;
        $this->numberOfOperations = $numberOfOperations;
        $this->usedFeatures = $usedFeatures;
        $this->workspaces = $workspaces;
    }
}