<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\models\shared;


/**
 * SchemaDiff
 * A SchemaDiff represents a diff of two Schemas.
 */
class SchemaDiff
{
    /**
     * @var array<string>
     */
    #[\JMS\Serializer\Annotation\SerializedName('additions')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    public array $additions;
    
    /**
     * @var array<string>
     */
    #[\JMS\Serializer\Annotation\SerializedName('deletions')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    public array $deletions;
    
    /**
     * @var array<string, \Speakeasy\SpeakeasyClientSDK\models\shared\SchemaDiffValueChange>
     */
    #[\JMS\Serializer\Annotation\SerializedName('modifications')]
    #[\JMS\Serializer\Annotation\Type('array<string, Speakeasy\SpeakeasyClientSDK\models\shared\SchemaDiffValueChange>')]
    public array $modifications;
    
	public function __construct()
	{
		$this->additions = [];
		$this->deletions = [];
		$this->modifications = [];
	}
}
