<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


class CliEvent
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
     * Timestamp when the event was created in the database.
     * 
     * @var \DateTime $createdAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;
    
    /**
     * Duration of the event in milliseconds.
     * 
     * @var ?int $durationMs
     */
	#[\JMS\Serializer\Annotation\SerializedName('duration_ms')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $durationMs = null;
    
    /**
     * Unique identifier for each execution of the CLI.
     * 
     * @var string $executionId
     */
	#[\JMS\Serializer\Annotation\SerializedName('execution_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $executionId;
    
    /**
     * Bump type of the lock file (calculated semver delta, or a custom change (manual release))
     * 
     * @var ?\Speakeasy\SpeakeasyClientSDK\Models\Shared\GenerateBumpType $generateBumpType
     */
	#[\JMS\Serializer\Annotation\SerializedName('generate_bump_type')]
    #[\JMS\Serializer\Annotation\Type('enum<Speakeasy\SpeakeasyClientSDK\Models\Shared\GenerateBumpType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?GenerateBumpType $generateBumpType = null;
    
    /**
     * Checksum of the configuration file (post generation)
     * 
     * @var ?string $generateConfigPostChecksum
     */
	#[\JMS\Serializer\Annotation\SerializedName('generate_config_post_checksum')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $generateConfigPostChecksum = null;
    
    /**
     * Rendered configuration file (post generation)
     * 
     * @var ?string $generateConfigPostRaw
     */
	#[\JMS\Serializer\Annotation\SerializedName('generate_config_post_raw')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $generateConfigPostRaw = null;
    
    /**
     * The version of the customer's SDK that we just generated
     * 
     * @var ?string $generateConfigPostVersion
     */
	#[\JMS\Serializer\Annotation\SerializedName('generate_config_post_version')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $generateConfigPostVersion = null;
    
    /**
     * Checksum of the configuration file (prior to generation)
     * 
     * @var ?string $generateConfigPreChecksum
     */
	#[\JMS\Serializer\Annotation\SerializedName('generate_config_pre_checksum')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $generateConfigPreChecksum = null;
    
    /**
     * Rendered configuration file (prior to generation)
     * 
     * @var ?string $generateConfigPreRaw
     */
	#[\JMS\Serializer\Annotation\SerializedName('generate_config_pre_raw')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $generateConfigPreRaw = null;
    
    /**
     * The version of the customer's SDK before we generated
     * 
     * @var ?string $generateConfigPreVersion
     */
	#[\JMS\Serializer\Annotation\SerializedName('generate_config_pre_version')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $generateConfigPreVersion = null;
    
    /**
     * gen.lock ID (expected to be a uuid).
     * 
     * @var ?string $generateGenLockId
     */
	#[\JMS\Serializer\Annotation\SerializedName('generate_gen_lock_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $generateGenLockId = null;
    
    /**
     * Features post generation
     * 
     * @var ?string $generateGenLockPostFeatures
     */
	#[\JMS\Serializer\Annotation\SerializedName('generate_gen_lock_post_features')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $generateGenLockPostFeatures = null;
    
    /**
     * Checksum of the Previous Rendered OpenAPI document (prior to generation, via gen lock)
     * 
     * @var ?string $generateGenLockPreDocChecksum
     */
	#[\JMS\Serializer\Annotation\SerializedName('generate_gen_lock_pre_doc_checksum')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $generateGenLockPreDocChecksum = null;
    
    /**
     * info.Version of the Previous Rendered OpenAPI document (prior to generation, via gen lock)
     * 
     * @var ?string $generateGenLockPreDocVersion
     */
	#[\JMS\Serializer\Annotation\SerializedName('generate_gen_lock_pre_doc_version')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $generateGenLockPreDocVersion = null;
    
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
     * Indicates whether tests were output.
     * 
     * @var ?bool $generateOutputTests
     */
	#[\JMS\Serializer\Annotation\SerializedName('generate_output_tests')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $generateOutputTests = null;
    
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
     * Expected Repo URL, for use in documentation generation.
     * 
     * @var ?string $generateRepoUrl
     */
	#[\JMS\Serializer\Annotation\SerializedName('generate_repo_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $generateRepoUrl = null;
    
    /**
     * The target of the event.
     * 
     * @var ?string $generateTarget
     */
	#[\JMS\Serializer\Annotation\SerializedName('generate_target')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $generateTarget = null;
    
    /**
     * The version of the target.
     * 
     * @var ?string $generateTargetVersion
     */
	#[\JMS\Serializer\Annotation\SerializedName('generate_target_version')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $generateTargetVersion = null;
    
    /**
     * Version of the generation logic used.
     * 
     * @var ?string $generateVersion
     */
	#[\JMS\Serializer\Annotation\SerializedName('generate_version')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $generateVersion = null;
    
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
     * Unique identifier for each event.
     * 
     * @var string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;
    
    /**
     * Type of interaction.
     * 
     * @var \Speakeasy\SpeakeasyClientSDK\Models\Shared\InteractionType $interactionType
     */
	#[\JMS\Serializer\Annotation\SerializedName('interaction_type')]
    #[\JMS\Serializer\Annotation\Type('enum<Speakeasy\SpeakeasyClientSDK\Models\Shared\InteractionType>')]
    public InteractionType $interactionType;
    
    /**
     * Timestamp when the event completed, in local time.
     * 
     * @var ?\DateTime $localCompletedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('local_completed_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $localCompletedAt = null;
    
    /**
     * Timestamp when the event started, in local time.
     * 
     * @var \DateTime $localStartedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('local_started_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $localStartedAt;
    
    /**
     * Checksum of the currently Rendered OpenAPI document.
     * 
     * @var ?string $managementDocChecksum
     */
	#[\JMS\Serializer\Annotation\SerializedName('management_doc_checksum')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $managementDocChecksum = null;
    
    /**
     * Version taken from info.version field of the Rendered OpenAPI document.
     * 
     * @var ?string $managementDocVersion
     */
	#[\JMS\Serializer\Annotation\SerializedName('management_doc_version')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $managementDocVersion = null;
    
    /**
     * Name of the published package.
     * 
     * @var ?string $publishPackageName
     */
	#[\JMS\Serializer\Annotation\SerializedName('publish_package_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $publishPackageName = null;
    
    /**
     * Name of the registry where the package was published.
     * 
     * @var ?string $publishPackageRegistryName
     */
	#[\JMS\Serializer\Annotation\SerializedName('publish_package_registry_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $publishPackageRegistryName = null;
    
    /**
     * URL of the published package.
     * 
     * @var ?string $publishPackageUrl
     */
	#[\JMS\Serializer\Annotation\SerializedName('publish_package_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $publishPackageUrl = null;
    
    /**
     * Version of the published package.
     * 
     * @var ?string $publishPackageVersion
     */
	#[\JMS\Serializer\Annotation\SerializedName('publish_package_version')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $publishPackageVersion = null;
    
    /**
     * Full CLI command.
     * 
     * @var ?string $rawCommand
     */
	#[\JMS\Serializer\Annotation\SerializedName('raw_command')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $rawCommand = null;
    
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
     * Identifier of the Speakeasy API key.
     * 
     * @var string $speakeasyApiKeyName
     */
	#[\JMS\Serializer\Annotation\SerializedName('speakeasy_api_key_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $speakeasyApiKeyName;
    
    /**
     * Version of the Speakeasy CLI.
     * 
     * @var string $speakeasyVersion
     */
	#[\JMS\Serializer\Annotation\SerializedName('speakeasy_version')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $speakeasyVersion;
    
    /**
     * Indicates whether the event was successful.
     * 
     * @var bool $success
     */
	#[\JMS\Serializer\Annotation\SerializedName('success')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $success;
    
    /**
     * Identifier of the workspace.
     * 
     * @var string $workspaceId
     */
	#[\JMS\Serializer\Annotation\SerializedName('workspace_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $workspaceId;
    
	public function __construct()
	{
		$this->commitHead = null;
		$this->continuousIntegrationEnvironment = null;
		$this->createdAt = new \DateTime();
		$this->durationMs = null;
		$this->executionId = "";
		$this->generateBumpType = null;
		$this->generateConfigPostChecksum = null;
		$this->generateConfigPostRaw = null;
		$this->generateConfigPostVersion = null;
		$this->generateConfigPreChecksum = null;
		$this->generateConfigPreRaw = null;
		$this->generateConfigPreVersion = null;
		$this->generateGenLockId = null;
		$this->generateGenLockPostFeatures = null;
		$this->generateGenLockPreDocChecksum = null;
		$this->generateGenLockPreDocVersion = null;
		$this->generateGenLockPreFeatures = null;
		$this->generateGenLockPreVersion = null;
		$this->generateOutputTests = null;
		$this->generatePublished = null;
		$this->generateRepoUrl = null;
		$this->generateTarget = null;
		$this->generateTargetVersion = null;
		$this->generateVersion = null;
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
		$this->interactionType = \Speakeasy\SpeakeasyClientSDK\Models\Shared\InteractionType::CiExec;
		$this->localCompletedAt = null;
		$this->localStartedAt = new \DateTime();
		$this->managementDocChecksum = null;
		$this->managementDocVersion = null;
		$this->publishPackageName = null;
		$this->publishPackageRegistryName = null;
		$this->publishPackageUrl = null;
		$this->publishPackageVersion = null;
		$this->rawCommand = null;
		$this->repoLabel = null;
		$this->speakeasyApiKeyName = "";
		$this->speakeasyVersion = "";
		$this->success = false;
		$this->workspaceId = "";
	}
}
