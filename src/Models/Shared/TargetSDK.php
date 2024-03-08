<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


class TargetSDK
{
    /**
     * Remote commit ID.
     * 
     * @var ?string $commitHead
     */
	#[\JMS\Serializer\Annotation\SerializedName('commit_head')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $commitHead = null;
    
    /**
     * Name of the CI environment.
     * 
     * @var ?string $continuousIntegrationEnvironment
     */
	#[\JMS\Serializer\Annotation\SerializedName('continuous_integration_environment')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $continuousIntegrationEnvironment = null;
    
    /**
     * Version of the generated target (post generation)
     * 
     * @var ?string $generateConfigPostVersion
     */
	#[\JMS\Serializer\Annotation\SerializedName('generate_config_post_version')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $generateConfigPostVersion = null;
    
    /**
     * gen.lock ID (expected to be a uuid). The same as `id`. A unique identifier for the target.
     * 
     * @var string $generateGenLockId
     */
	#[\JMS\Serializer\Annotation\SerializedName('generate_gen_lock_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $generateGenLockId;
    
    /**
     * Features prior to generation
     * 
     * @var ?string $generateGenLockPreFeatures
     */
	#[\JMS\Serializer\Annotation\SerializedName('generate_gen_lock_pre_features')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $generateGenLockPreFeatures = null;
    
    /**
     * Artifact version for the Previous Generation
     * 
     * @var ?string $generateGenLockPreVersion
     */
	#[\JMS\Serializer\Annotation\SerializedName('generate_gen_lock_pre_version')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $generateGenLockPreVersion = null;
    
    /**
     * Indicates whether the target was considered published.
     * 
     * @var ?bool $generatePublished
     */
	#[\JMS\Serializer\Annotation\SerializedName('generate_published')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $generatePublished = null;
    
    /**
     * eg `typescript`, `terraform`, `python`
     * 
     * @var string $generateTarget
     */
	#[\JMS\Serializer\Annotation\SerializedName('generate_target')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $generateTarget;
    
    /**
     * The name of the target as defined by the user.
     * 
     * @var ?string $generateTargetName
     */
	#[\JMS\Serializer\Annotation\SerializedName('generate_target_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $generateTargetName = null;
    
    /**
     * The version of the Speakeasy generator for this target eg v2 of the typescript generator.
     * 
     * @var ?string $generateTargetVersion
     */
	#[\JMS\Serializer\Annotation\SerializedName('generate_target_version')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $generateTargetVersion = null;
    
    /**
     * GitHub organization of the action.
     * 
     * @var ?string $ghActionOrganization
     */
	#[\JMS\Serializer\Annotation\SerializedName('gh_action_organization')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $ghActionOrganization = null;
    
    /**
     * GitHub repository of the action.
     * 
     * @var ?string $ghActionRepository
     */
	#[\JMS\Serializer\Annotation\SerializedName('gh_action_repository')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $ghActionRepository = null;
    
    /**
     * Link to the GitHub action run.
     * 
     * @var ?string $ghActionRunLink
     */
	#[\JMS\Serializer\Annotation\SerializedName('gh_action_run_link')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $ghActionRunLink = null;
    
    /**
     * Version of the GitHub action.
     * 
     * @var ?string $ghActionVersion
     */
	#[\JMS\Serializer\Annotation\SerializedName('gh_action_version')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $ghActionVersion = null;
    
    /**
     * Current working directory relative to the git root.
     * 
     * @var ?string $gitRelativeCwd
     */
	#[\JMS\Serializer\Annotation\SerializedName('git_relative_cwd')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $gitRelativeCwd = null;
    
    /**
     * Default owner for git remote.
     * 
     * @var ?string $gitRemoteDefaultOwner
     */
	#[\JMS\Serializer\Annotation\SerializedName('git_remote_default_owner')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $gitRemoteDefaultOwner = null;
    
    /**
     * Default repository name for git remote.
     * 
     * @var ?string $gitRemoteDefaultRepo
     */
	#[\JMS\Serializer\Annotation\SerializedName('git_remote_default_repo')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $gitRemoteDefaultRepo = null;
    
    /**
     * User email from git configuration.
     * 
     * @var ?string $gitUserEmail
     */
	#[\JMS\Serializer\Annotation\SerializedName('git_user_email')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $gitUserEmail = null;
    
    /**
     * User's name from git configuration. (not GitHub username)
     * 
     * @var ?string $gitUserName
     */
	#[\JMS\Serializer\Annotation\SerializedName('git_user_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $gitUserName = null;
    
    /**
     * Remote hostname.
     * 
     * @var ?string $hostname
     */
	#[\JMS\Serializer\Annotation\SerializedName('hostname')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $hostname = null;
    
    /**
     * Unique identifier of the target the same as `generate_gen_lock_id`
     * 
     * @var string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;
    
    /**
     * Timestamp when the event was created in the database.
     * 
     * @var \DateTime $lastEventCreatedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('last_event_created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $lastEventCreatedAt;
    
    /**
     * Unique identifier of the last event for the target
     * 
     * @var string $lastEventId
     */
	#[\JMS\Serializer\Annotation\SerializedName('last_event_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $lastEventId;
    
    /**
     * Type of interaction.
     * 
     * @var \Speakeasy\SpeakeasyClientSDK\Models\Shared\InteractionType $lastEventInteractionType
     */
	#[\JMS\Serializer\Annotation\SerializedName('last_event_interaction_type')]
    #[\JMS\Serializer\Annotation\Type('enum<Speakeasy\SpeakeasyClientSDK\Models\Shared\InteractionType>')]
    public InteractionType $lastEventInteractionType;
    
    /**
     * Label of the git repository.
     * 
     * @var ?string $repoLabel
     */
	#[\JMS\Serializer\Annotation\SerializedName('repo_label')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $repoLabel = null;
    
    /**
     * Indicates whether the event was successful.
     * 
     * @var ?bool $success
     */
	#[\JMS\Serializer\Annotation\SerializedName('success')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $success = null;
    
	public function __construct()
	{
		$this->commitHead = null;
		$this->continuousIntegrationEnvironment = null;
		$this->generateConfigPostVersion = null;
		$this->generateGenLockId = "";
		$this->generateGenLockPreFeatures = null;
		$this->generateGenLockPreVersion = null;
		$this->generatePublished = null;
		$this->generateTarget = "";
		$this->generateTargetName = null;
		$this->generateTargetVersion = null;
		$this->ghActionOrganization = null;
		$this->ghActionRepository = null;
		$this->ghActionRunLink = null;
		$this->ghActionVersion = null;
		$this->gitRelativeCwd = null;
		$this->gitRemoteDefaultOwner = null;
		$this->gitRemoteDefaultRepo = null;
		$this->gitUserEmail = null;
		$this->gitUserName = null;
		$this->hostname = null;
		$this->id = "";
		$this->lastEventCreatedAt = new \DateTime();
		$this->lastEventId = "";
		$this->lastEventInteractionType = \Speakeasy\SpeakeasyClientSDK\Models\Shared\InteractionType::CiExec;
		$this->repoLabel = null;
		$this->success = null;
	}
}
