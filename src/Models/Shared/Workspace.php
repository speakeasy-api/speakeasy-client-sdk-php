<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** Workspace - A speakeasy workspace */
class Workspace
{
    /**
     *
     * @var \DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    public \DateTime $createdAt;

    /**
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     *
     * @var string $organizationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('organization_id')]
    public string $organizationId;

    /**
     *
     * @var string $slug
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('slug')]
    public string $slug;

    /**
     *
     * @var \DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    public \DateTime $updatedAt;

    /**
     *
     * @var bool $verified
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('verified')]
    public bool $verified;

    /**
     *
     * @var ?bool $inactive
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('inactive')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $inactive = null;

    /**
     * Deprecated. Use organization.telemetry_disabled instead.
     *
     * @var ?bool $telemetryDisabled
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('telemetry_disabled')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $telemetryDisabled = null;

    /**
     * @param  \DateTime  $createdAt
     * @param  string  $id
     * @param  string  $name
     * @param  string  $organizationId
     * @param  string  $slug
     * @param  \DateTime  $updatedAt
     * @param  bool  $verified
     * @param  ?bool  $inactive
     * @param  ?bool  $telemetryDisabled
     * @phpstan-pure
     */
    public function __construct(\DateTime $createdAt, string $id, string $name, string $organizationId, string $slug, \DateTime $updatedAt, bool $verified, ?bool $inactive = null, ?bool $telemetryDisabled = null)
    {
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->name = $name;
        $this->organizationId = $organizationId;
        $this->slug = $slug;
        $this->updatedAt = $updatedAt;
        $this->verified = $verified;
        $this->inactive = $inactive;
        $this->telemetryDisabled = $telemetryDisabled;
    }
}