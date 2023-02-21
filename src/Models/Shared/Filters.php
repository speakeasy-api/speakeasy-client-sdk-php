<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/**
 * Filters
 * Filters are used to query requests.
 */
class Filters
{
    /**
     * @var array<\Speakeasy\SpeakeasyClientSDK\Models\Shared\Filter>
     */
    #[\JMS\Serializer\Annotation\SerializedName('filters')]
    #[\JMS\Serializer\Annotation\Type('array<Speakeasy\SpeakeasyClientSDK\Models\Shared\Filter>')]
    public array $filters;
    
    #[\JMS\Serializer\Annotation\SerializedName('limit')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $limit;
    
    #[\JMS\Serializer\Annotation\SerializedName('offset')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $offset;
    
    #[\JMS\Serializer\Annotation\SerializedName('operator')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $operator;
    
	public function __construct()
	{
		$this->filters = [];
		$this->limit = 0;
		$this->offset = 0;
		$this->operator = "";
	}
}
