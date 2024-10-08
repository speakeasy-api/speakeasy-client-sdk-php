<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
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
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $commitHead = null;

    /**
     * Name of the CI environment.
     *
     * @var ?string $continuousIntegrationEnvironment
     */
    #[\JMS\Serializer\Annotation\SerializedName('continuous_integration_environment')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $continuousIntegrationEnvironment = null;

    /**
     * Timestamp when the event was created in the database.
     *
     * @var \DateTime $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    public \DateTime $createdAt;

    /**
     * Duration of the event in milliseconds.
     *
     * @var ?int $durationMs
     */
    #[\JMS\Serializer\Annotation\SerializedName('duration_ms')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $durationMs = null;

    /**
     * Error message if the event was not successful.
     *
     * @var ?string $error
     */
    #[\JMS\Serializer\Annotation\SerializedName('error')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $error = null;

    /**
     * Unique identifier for each execution of the CLI.
     *
     * @var string $executionId
     */
    #[\JMS\Serializer\Annotation\SerializedName('execution_id')]
    public string $executionId;

    /**
     * Bump type of the lock file (calculated semver delta, custom change (manual release), or prerelease/graduate)
     *
     * @var ?GenerateBumpType $generateBumpType
     */
    #[\JMS\Serializer\Annotation\SerializedName('generate_bump_type')]
    #[\JMS\Serializer\Annotation\Type('\Speakeasy\SpeakeasyClientSDK\Models\Shared\GenerateBumpType|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?GenerateBumpType $generateBumpType = null;

    /**
     * Checksum of the configuration file (post generation)
     *
     * @var ?string $generateConfigPostChecksum
     */
    #[\JMS\Serializer\Annotation\SerializedName('generate_config_post_checksum')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $generateConfigPostChecksum = null;

    /**
     * Rendered configuration file (post generation)
     *
     * @var ?string $generateConfigPostRaw
     */
    #[\JMS\Serializer\Annotation\SerializedName('generate_config_post_raw')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $generateConfigPostRaw = null;

    /**
     * The version of the customer's SDK that we just generated
     *
     * @var ?string $generateConfigPostVersion
     */
    #[\JMS\Serializer\Annotation\SerializedName('generate_config_post_version')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $generateConfigPostVersion = null;

    /**
     * Checksum of the configuration file (prior to generation)
     *
     * @var ?string $generateConfigPreChecksum
     */
    #[\JMS\Serializer\Annotation\SerializedName('generate_config_pre_checksum')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $generateConfigPreChecksum = null;

    /**
     * Rendered configuration file (prior to generation)
     *
     * @var ?string $generateConfigPreRaw
     */
    #[\JMS\Serializer\Annotation\SerializedName('generate_config_pre_raw')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $generateConfigPreRaw = null;

    /**
     * The version of the customer's SDK before we generated
     *
     * @var ?string $generateConfigPreVersion
     */
    #[\JMS\Serializer\Annotation\SerializedName('generate_config_pre_version')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $generateConfigPreVersion = null;

    /**
     * Eligible feature set during generation
     *
     * @var ?string $generateEligibleFeatures
     */
    #[\JMS\Serializer\Annotation\SerializedName('generate_eligible_features')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $generateEligibleFeatures = null;

    /**
     * gen.lock ID (expected to be a uuid).
     *
     * @var ?string $generateGenLockId
     */
    #[\JMS\Serializer\Annotation\SerializedName('generate_gen_lock_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $generateGenLockId = null;

    /**
     * Features post generation
     *
     * @var ?string $generateGenLockPostFeatures
     */
    #[\JMS\Serializer\Annotation\SerializedName('generate_gen_lock_post_features')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $generateGenLockPostFeatures = null;

    /**
     * Blob digest of the Previous Generation
     *
     * @var ?string $generateGenLockPreBlobDigest
     */
    #[\JMS\Serializer\Annotation\SerializedName('generate_gen_lock_pre_blob_digest')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $generateGenLockPreBlobDigest = null;

    /**
     * Checksum of the Previous Rendered OpenAPI document (prior to generation, via gen lock)
     *
     * @var ?string $generateGenLockPreDocChecksum
     */
    #[\JMS\Serializer\Annotation\SerializedName('generate_gen_lock_pre_doc_checksum')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $generateGenLockPreDocChecksum = null;

    /**
     * info.Version of the Previous Rendered OpenAPI document (prior to generation, via gen lock)
     *
     * @var ?string $generateGenLockPreDocVersion
     */
    #[\JMS\Serializer\Annotation\SerializedName('generate_gen_lock_pre_doc_version')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $generateGenLockPreDocVersion = null;

    /**
     * Features prior to generation
     *
     * @var ?string $generateGenLockPreFeatures
     */
    #[\JMS\Serializer\Annotation\SerializedName('generate_gen_lock_pre_features')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $generateGenLockPreFeatures = null;

    /**
     * Namespace name of the Previous Generation
     *
     * @var ?string $generateGenLockPreNamespaceName
     */
    #[\JMS\Serializer\Annotation\SerializedName('generate_gen_lock_pre_namespace_name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $generateGenLockPreNamespaceName = null;

    /**
     * Revision digest of the Previous Generation
     *
     * @var ?string $generateGenLockPreRevisionDigest
     */
    #[\JMS\Serializer\Annotation\SerializedName('generate_gen_lock_pre_revision_digest')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $generateGenLockPreRevisionDigest = null;

    /**
     * Artifact version for the Previous Generation
     *
     * @var ?string $generateGenLockPreVersion
     */
    #[\JMS\Serializer\Annotation\SerializedName('generate_gen_lock_pre_version')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $generateGenLockPreVersion = null;

    /**
     * The number of operations ignored in generation.
     *
     * @var ?int $generateNumberOfOperationsIgnored
     */
    #[\JMS\Serializer\Annotation\SerializedName('generate_number_of_operations_ignored')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $generateNumberOfOperationsIgnored = null;

    /**
     * The number of operations used in generation.
     *
     * @var ?int $generateNumberOfOperationsUsed
     */
    #[\JMS\Serializer\Annotation\SerializedName('generate_number_of_operations_used')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $generateNumberOfOperationsUsed = null;

    /**
     * Indicates whether tests were output.
     *
     * @var ?bool $generateOutputTests
     */
    #[\JMS\Serializer\Annotation\SerializedName('generate_output_tests')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $generateOutputTests = null;

    /**
     * Indicates whether the target was considered published.
     *
     * @var ?bool $generatePublished
     */
    #[\JMS\Serializer\Annotation\SerializedName('generate_published')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $generatePublished = null;

    /**
     * Expected Repo URL, for use in documentation generation.
     *
     * @var ?string $generateRepoUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('generate_repo_url')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $generateRepoUrl = null;

    /**
     * The target of the event.
     *
     * @var ?string $generateTarget
     */
    #[\JMS\Serializer\Annotation\SerializedName('generate_target')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $generateTarget = null;

    /**
     * The workflow name of the target.
     *
     * @var ?string $generateTargetName
     */
    #[\JMS\Serializer\Annotation\SerializedName('generate_target_name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $generateTargetName = null;

    /**
     * The version of the target.
     *
     * @var ?string $generateTargetVersion
     */
    #[\JMS\Serializer\Annotation\SerializedName('generate_target_version')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $generateTargetVersion = null;

    /**
     * Version of the generation logic used.
     *
     * @var ?string $generateVersion
     */
    #[\JMS\Serializer\Annotation\SerializedName('generate_version')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $generateVersion = null;

    /**
     * GitHub organization of the action.
     *
     * @var ?string $ghActionOrganization
     */
    #[\JMS\Serializer\Annotation\SerializedName('gh_action_organization')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $ghActionOrganization = null;

    /**
     * GitHub Action ref value.
     *
     * @var ?string $ghActionRef
     */
    #[\JMS\Serializer\Annotation\SerializedName('gh_action_ref')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $ghActionRef = null;

    /**
     * GitHub repository of the action.
     *
     * @var ?string $ghActionRepository
     */
    #[\JMS\Serializer\Annotation\SerializedName('gh_action_repository')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $ghActionRepository = null;

    /**
     * Link to the GitHub action run.
     *
     * @var ?string $ghActionRunLink
     */
    #[\JMS\Serializer\Annotation\SerializedName('gh_action_run_link')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $ghActionRunLink = null;

    /**
     * Version of the GitHub action.
     *
     * @var ?string $ghActionVersion
     */
    #[\JMS\Serializer\Annotation\SerializedName('gh_action_version')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $ghActionVersion = null;

    /**
     * The reference to a created pull request.
     *
     * @var ?string $ghPullRequest
     */
    #[\JMS\Serializer\Annotation\SerializedName('gh_pull_request')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $ghPullRequest = null;

    /**
     * Current working directory relative to the git root.
     *
     * @var ?string $gitRelativeCwd
     */
    #[\JMS\Serializer\Annotation\SerializedName('git_relative_cwd')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $gitRelativeCwd = null;

    /**
     * Default owner for git remote.
     *
     * @var ?string $gitRemoteDefaultOwner
     */
    #[\JMS\Serializer\Annotation\SerializedName('git_remote_default_owner')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $gitRemoteDefaultOwner = null;

    /**
     * Default repository name for git remote.
     *
     * @var ?string $gitRemoteDefaultRepo
     */
    #[\JMS\Serializer\Annotation\SerializedName('git_remote_default_repo')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $gitRemoteDefaultRepo = null;

    /**
     * User email from git configuration.
     *
     * @var ?string $gitUserEmail
     */
    #[\JMS\Serializer\Annotation\SerializedName('git_user_email')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $gitUserEmail = null;

    /**
     * User's name from git configuration. (not GitHub username)
     *
     * @var ?string $gitUserName
     */
    #[\JMS\Serializer\Annotation\SerializedName('git_user_name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $gitUserName = null;

    /**
     * Remote hostname.
     *
     * @var ?string $hostname
     */
    #[\JMS\Serializer\Annotation\SerializedName('hostname')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $hostname = null;

    /**
     * Unique identifier for each event.
     *
     * @var string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * Type of interaction.
     *
     * @var InteractionType $interactionType
     */
    #[\JMS\Serializer\Annotation\SerializedName('interaction_type')]
    #[\JMS\Serializer\Annotation\Type('\Speakeasy\SpeakeasyClientSDK\Models\Shared\InteractionType')]
    public InteractionType $interactionType;

    /**
     * The last step of the event.
     *
     * @var ?string $lastStep
     */
    #[\JMS\Serializer\Annotation\SerializedName('last_step')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $lastStep = null;

    /**
     * The checksum of the lint report.
     *
     * @var ?string $lintReportDigest
     */
    #[\JMS\Serializer\Annotation\SerializedName('lint_report_digest')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $lintReportDigest = null;

    /**
     * The number of errors in the lint report.
     *
     * @var ?int $lintReportErrorCount
     */
    #[\JMS\Serializer\Annotation\SerializedName('lint_report_error_count')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $lintReportErrorCount = null;

    /**
     * The number of info messages in the lint report.
     *
     * @var ?int $lintReportInfoCount
     */
    #[\JMS\Serializer\Annotation\SerializedName('lint_report_info_count')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $lintReportInfoCount = null;

    /**
     * The number of warnings in the lint report.
     *
     * @var ?int $lintReportWarningCount
     */
    #[\JMS\Serializer\Annotation\SerializedName('lint_report_warning_count')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $lintReportWarningCount = null;

    /**
     * Timestamp when the event completed, in local time.
     *
     * @var ?\DateTime $localCompletedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('local_completed_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $localCompletedAt = null;

    /**
     * Timestamp when the event started, in local time.
     *
     * @var \DateTime $localStartedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('local_started_at')]
    public \DateTime $localStartedAt;

    /**
     * Checksum of the currently Rendered OpenAPI document.
     *
     * @var ?string $managementDocChecksum
     */
    #[\JMS\Serializer\Annotation\SerializedName('management_doc_checksum')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $managementDocChecksum = null;

    /**
     * Version taken from info.version field of the Rendered OpenAPI document.
     *
     * @var ?string $managementDocVersion
     */
    #[\JMS\Serializer\Annotation\SerializedName('management_doc_version')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $managementDocVersion = null;

    /**
     * Mermaid diagram
     *
     * @var ?string $mermaidDiagram
     */
    #[\JMS\Serializer\Annotation\SerializedName('mermaid_diagram')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $mermaidDiagram = null;

    /**
     * The blob digest of the base source.
     *
     * @var ?string $openapiDiffBaseSourceBlobDigest
     */
    #[\JMS\Serializer\Annotation\SerializedName('openapi_diff_base_source_blob_digest')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $openapiDiffBaseSourceBlobDigest = null;

    /**
     * The namespace name of the base source.
     *
     * @var ?string $openapiDiffBaseSourceNamespaceName
     */
    #[\JMS\Serializer\Annotation\SerializedName('openapi_diff_base_source_namespace_name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $openapiDiffBaseSourceNamespaceName = null;

    /**
     * The revision digest of the base source.
     *
     * @var ?string $openapiDiffBaseSourceRevisionDigest
     */
    #[\JMS\Serializer\Annotation\SerializedName('openapi_diff_base_source_revision_digest')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $openapiDiffBaseSourceRevisionDigest = null;

    /**
     * The number of breaking changes in the openapi diff report.
     *
     * @var ?int $openapiDiffBreakingChangesCount
     */
    #[\JMS\Serializer\Annotation\SerializedName('openapi_diff_breaking_changes_count')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $openapiDiffBreakingChangesCount = null;

    /**
     * Bump type of the lock file (calculated semver delta, or a custom change (manual release))
     *
     * @var ?OpenapiDiffBumpType $openapiDiffBumpType
     */
    #[\JMS\Serializer\Annotation\SerializedName('openapi_diff_bump_type')]
    #[\JMS\Serializer\Annotation\Type('\Speakeasy\SpeakeasyClientSDK\Models\Shared\OpenapiDiffBumpType|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?OpenapiDiffBumpType $openapiDiffBumpType = null;

    /**
     * The checksum of the openapi diff report.
     *
     * @var ?string $openapiDiffReportDigest
     */
    #[\JMS\Serializer\Annotation\SerializedName('openapi_diff_report_digest')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $openapiDiffReportDigest = null;

    /**
     * Name of the published package.
     *
     * @var ?string $publishPackageName
     */
    #[\JMS\Serializer\Annotation\SerializedName('publish_package_name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $publishPackageName = null;

    /**
     * Name of the registry where the package was published.
     *
     * @var ?string $publishPackageRegistryName
     */
    #[\JMS\Serializer\Annotation\SerializedName('publish_package_registry_name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $publishPackageRegistryName = null;

    /**
     * URL of the published package.
     *
     * @var ?string $publishPackageUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('publish_package_url')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $publishPackageUrl = null;

    /**
     * Version of the published package.
     *
     * @var ?string $publishPackageVersion
     */
    #[\JMS\Serializer\Annotation\SerializedName('publish_package_version')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $publishPackageVersion = null;

    /**
     * Full CLI command.
     *
     * @var ?string $rawCommand
     */
    #[\JMS\Serializer\Annotation\SerializedName('raw_command')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $rawCommand = null;

    /**
     * Label of the git repository.
     *
     * @var ?string $repoLabel
     */
    #[\JMS\Serializer\Annotation\SerializedName('repo_label')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $repoLabel = null;

    /**
     * The blob digest of the source.
     *
     * @var ?string $sourceBlobDigest
     */
    #[\JMS\Serializer\Annotation\SerializedName('source_blob_digest')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $sourceBlobDigest = null;

    /**
     * The namespace name of the source.
     *
     * @var ?string $sourceNamespaceName
     */
    #[\JMS\Serializer\Annotation\SerializedName('source_namespace_name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $sourceNamespaceName = null;

    /**
     * The revision digest of the source.
     *
     * @var ?string $sourceRevisionDigest
     */
    #[\JMS\Serializer\Annotation\SerializedName('source_revision_digest')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $sourceRevisionDigest = null;

    /**
     * Identifier of the Speakeasy API key.
     *
     * @var string $speakeasyApiKeyName
     */
    #[\JMS\Serializer\Annotation\SerializedName('speakeasy_api_key_name')]
    public string $speakeasyApiKeyName;

    /**
     * Version of the Speakeasy CLI.
     *
     * @var string $speakeasyVersion
     */
    #[\JMS\Serializer\Annotation\SerializedName('speakeasy_version')]
    public string $speakeasyVersion;

    /**
     * Indicates whether the event was successful.
     *
     * @var bool $success
     */
    #[\JMS\Serializer\Annotation\SerializedName('success')]
    public bool $success;

    /**
     * Workflow lock file (post execution)
     *
     * @var ?string $workflowLockPostRaw
     */
    #[\JMS\Serializer\Annotation\SerializedName('workflow_lock_post_raw')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $workflowLockPostRaw = null;

    /**
     * Workflow lock file (prior to execution)
     *
     * @var ?string $workflowLockPreRaw
     */
    #[\JMS\Serializer\Annotation\SerializedName('workflow_lock_pre_raw')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $workflowLockPreRaw = null;

    /**
     * Workflow file (post execution)
     *
     * @var ?string $workflowPostRaw
     */
    #[\JMS\Serializer\Annotation\SerializedName('workflow_post_raw')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $workflowPostRaw = null;

    /**
     * Workflow file (prior to execution)
     *
     * @var ?string $workflowPreRaw
     */
    #[\JMS\Serializer\Annotation\SerializedName('workflow_pre_raw')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $workflowPreRaw = null;

    /**
     * Identifier of the workspace.
     *
     * @var string $workspaceId
     */
    #[\JMS\Serializer\Annotation\SerializedName('workspace_id')]
    public string $workspaceId;

    /**
     * @param  \DateTime  $createdAt
     * @param  string  $executionId
     * @param  string  $id
     * @param  InteractionType  $interactionType
     * @param  \DateTime  $localStartedAt
     * @param  string  $speakeasyApiKeyName
     * @param  string  $speakeasyVersion
     * @param  bool  $success
     * @param  string  $workspaceId
     * @param  ?string  $commitHead
     * @param  ?string  $continuousIntegrationEnvironment
     * @param  ?int  $durationMs
     * @param  ?string  $error
     * @param  ?GenerateBumpType  $generateBumpType
     * @param  ?string  $generateConfigPostChecksum
     * @param  ?string  $generateConfigPostRaw
     * @param  ?string  $generateConfigPostVersion
     * @param  ?string  $generateConfigPreChecksum
     * @param  ?string  $generateConfigPreRaw
     * @param  ?string  $generateConfigPreVersion
     * @param  ?string  $generateEligibleFeatures
     * @param  ?string  $generateGenLockId
     * @param  ?string  $generateGenLockPostFeatures
     * @param  ?string  $generateGenLockPreBlobDigest
     * @param  ?string  $generateGenLockPreDocChecksum
     * @param  ?string  $generateGenLockPreDocVersion
     * @param  ?string  $generateGenLockPreFeatures
     * @param  ?string  $generateGenLockPreNamespaceName
     * @param  ?string  $generateGenLockPreRevisionDigest
     * @param  ?string  $generateGenLockPreVersion
     * @param  ?int  $generateNumberOfOperationsIgnored
     * @param  ?int  $generateNumberOfOperationsUsed
     * @param  ?bool  $generateOutputTests
     * @param  ?bool  $generatePublished
     * @param  ?string  $generateRepoUrl
     * @param  ?string  $generateTarget
     * @param  ?string  $generateTargetName
     * @param  ?string  $generateTargetVersion
     * @param  ?string  $generateVersion
     * @param  ?string  $ghActionOrganization
     * @param  ?string  $ghActionRef
     * @param  ?string  $ghActionRepository
     * @param  ?string  $ghActionRunLink
     * @param  ?string  $ghActionVersion
     * @param  ?string  $ghPullRequest
     * @param  ?string  $gitRelativeCwd
     * @param  ?string  $gitRemoteDefaultOwner
     * @param  ?string  $gitRemoteDefaultRepo
     * @param  ?string  $gitUserEmail
     * @param  ?string  $gitUserName
     * @param  ?string  $hostname
     * @param  ?string  $lastStep
     * @param  ?string  $lintReportDigest
     * @param  ?int  $lintReportErrorCount
     * @param  ?int  $lintReportInfoCount
     * @param  ?int  $lintReportWarningCount
     * @param  ?\DateTime  $localCompletedAt
     * @param  ?string  $managementDocChecksum
     * @param  ?string  $managementDocVersion
     * @param  ?string  $mermaidDiagram
     * @param  ?string  $openapiDiffBaseSourceBlobDigest
     * @param  ?string  $openapiDiffBaseSourceNamespaceName
     * @param  ?string  $openapiDiffBaseSourceRevisionDigest
     * @param  ?int  $openapiDiffBreakingChangesCount
     * @param  ?OpenapiDiffBumpType  $openapiDiffBumpType
     * @param  ?string  $openapiDiffReportDigest
     * @param  ?string  $publishPackageName
     * @param  ?string  $publishPackageRegistryName
     * @param  ?string  $publishPackageUrl
     * @param  ?string  $publishPackageVersion
     * @param  ?string  $rawCommand
     * @param  ?string  $repoLabel
     * @param  ?string  $sourceBlobDigest
     * @param  ?string  $sourceNamespaceName
     * @param  ?string  $sourceRevisionDigest
     * @param  ?string  $workflowLockPostRaw
     * @param  ?string  $workflowLockPreRaw
     * @param  ?string  $workflowPostRaw
     * @param  ?string  $workflowPreRaw
     */
    public function __construct(\DateTime $createdAt, string $executionId, string $id, InteractionType $interactionType, \DateTime $localStartedAt, string $speakeasyApiKeyName, string $speakeasyVersion, bool $success, string $workspaceId, ?string $commitHead = null, ?string $continuousIntegrationEnvironment = null, ?int $durationMs = null, ?string $error = null, ?GenerateBumpType $generateBumpType = null, ?string $generateConfigPostChecksum = null, ?string $generateConfigPostRaw = null, ?string $generateConfigPostVersion = null, ?string $generateConfigPreChecksum = null, ?string $generateConfigPreRaw = null, ?string $generateConfigPreVersion = null, ?string $generateEligibleFeatures = null, ?string $generateGenLockId = null, ?string $generateGenLockPostFeatures = null, ?string $generateGenLockPreBlobDigest = null, ?string $generateGenLockPreDocChecksum = null, ?string $generateGenLockPreDocVersion = null, ?string $generateGenLockPreFeatures = null, ?string $generateGenLockPreNamespaceName = null, ?string $generateGenLockPreRevisionDigest = null, ?string $generateGenLockPreVersion = null, ?int $generateNumberOfOperationsIgnored = null, ?int $generateNumberOfOperationsUsed = null, ?bool $generateOutputTests = null, ?bool $generatePublished = null, ?string $generateRepoUrl = null, ?string $generateTarget = null, ?string $generateTargetName = null, ?string $generateTargetVersion = null, ?string $generateVersion = null, ?string $ghActionOrganization = null, ?string $ghActionRef = null, ?string $ghActionRepository = null, ?string $ghActionRunLink = null, ?string $ghActionVersion = null, ?string $ghPullRequest = null, ?string $gitRelativeCwd = null, ?string $gitRemoteDefaultOwner = null, ?string $gitRemoteDefaultRepo = null, ?string $gitUserEmail = null, ?string $gitUserName = null, ?string $hostname = null, ?string $lastStep = null, ?string $lintReportDigest = null, ?int $lintReportErrorCount = null, ?int $lintReportInfoCount = null, ?int $lintReportWarningCount = null, ?\DateTime $localCompletedAt = null, ?string $managementDocChecksum = null, ?string $managementDocVersion = null, ?string $mermaidDiagram = null, ?string $openapiDiffBaseSourceBlobDigest = null, ?string $openapiDiffBaseSourceNamespaceName = null, ?string $openapiDiffBaseSourceRevisionDigest = null, ?int $openapiDiffBreakingChangesCount = null, ?OpenapiDiffBumpType $openapiDiffBumpType = null, ?string $openapiDiffReportDigest = null, ?string $publishPackageName = null, ?string $publishPackageRegistryName = null, ?string $publishPackageUrl = null, ?string $publishPackageVersion = null, ?string $rawCommand = null, ?string $repoLabel = null, ?string $sourceBlobDigest = null, ?string $sourceNamespaceName = null, ?string $sourceRevisionDigest = null, ?string $workflowLockPostRaw = null, ?string $workflowLockPreRaw = null, ?string $workflowPostRaw = null, ?string $workflowPreRaw = null)
    {
        $this->createdAt = $createdAt;
        $this->executionId = $executionId;
        $this->id = $id;
        $this->interactionType = $interactionType;
        $this->localStartedAt = $localStartedAt;
        $this->speakeasyApiKeyName = $speakeasyApiKeyName;
        $this->speakeasyVersion = $speakeasyVersion;
        $this->success = $success;
        $this->workspaceId = $workspaceId;
        $this->commitHead = $commitHead;
        $this->continuousIntegrationEnvironment = $continuousIntegrationEnvironment;
        $this->durationMs = $durationMs;
        $this->error = $error;
        $this->generateBumpType = $generateBumpType;
        $this->generateConfigPostChecksum = $generateConfigPostChecksum;
        $this->generateConfigPostRaw = $generateConfigPostRaw;
        $this->generateConfigPostVersion = $generateConfigPostVersion;
        $this->generateConfigPreChecksum = $generateConfigPreChecksum;
        $this->generateConfigPreRaw = $generateConfigPreRaw;
        $this->generateConfigPreVersion = $generateConfigPreVersion;
        $this->generateEligibleFeatures = $generateEligibleFeatures;
        $this->generateGenLockId = $generateGenLockId;
        $this->generateGenLockPostFeatures = $generateGenLockPostFeatures;
        $this->generateGenLockPreBlobDigest = $generateGenLockPreBlobDigest;
        $this->generateGenLockPreDocChecksum = $generateGenLockPreDocChecksum;
        $this->generateGenLockPreDocVersion = $generateGenLockPreDocVersion;
        $this->generateGenLockPreFeatures = $generateGenLockPreFeatures;
        $this->generateGenLockPreNamespaceName = $generateGenLockPreNamespaceName;
        $this->generateGenLockPreRevisionDigest = $generateGenLockPreRevisionDigest;
        $this->generateGenLockPreVersion = $generateGenLockPreVersion;
        $this->generateNumberOfOperationsIgnored = $generateNumberOfOperationsIgnored;
        $this->generateNumberOfOperationsUsed = $generateNumberOfOperationsUsed;
        $this->generateOutputTests = $generateOutputTests;
        $this->generatePublished = $generatePublished;
        $this->generateRepoUrl = $generateRepoUrl;
        $this->generateTarget = $generateTarget;
        $this->generateTargetName = $generateTargetName;
        $this->generateTargetVersion = $generateTargetVersion;
        $this->generateVersion = $generateVersion;
        $this->ghActionOrganization = $ghActionOrganization;
        $this->ghActionRef = $ghActionRef;
        $this->ghActionRepository = $ghActionRepository;
        $this->ghActionRunLink = $ghActionRunLink;
        $this->ghActionVersion = $ghActionVersion;
        $this->ghPullRequest = $ghPullRequest;
        $this->gitRelativeCwd = $gitRelativeCwd;
        $this->gitRemoteDefaultOwner = $gitRemoteDefaultOwner;
        $this->gitRemoteDefaultRepo = $gitRemoteDefaultRepo;
        $this->gitUserEmail = $gitUserEmail;
        $this->gitUserName = $gitUserName;
        $this->hostname = $hostname;
        $this->lastStep = $lastStep;
        $this->lintReportDigest = $lintReportDigest;
        $this->lintReportErrorCount = $lintReportErrorCount;
        $this->lintReportInfoCount = $lintReportInfoCount;
        $this->lintReportWarningCount = $lintReportWarningCount;
        $this->localCompletedAt = $localCompletedAt;
        $this->managementDocChecksum = $managementDocChecksum;
        $this->managementDocVersion = $managementDocVersion;
        $this->mermaidDiagram = $mermaidDiagram;
        $this->openapiDiffBaseSourceBlobDigest = $openapiDiffBaseSourceBlobDigest;
        $this->openapiDiffBaseSourceNamespaceName = $openapiDiffBaseSourceNamespaceName;
        $this->openapiDiffBaseSourceRevisionDigest = $openapiDiffBaseSourceRevisionDigest;
        $this->openapiDiffBreakingChangesCount = $openapiDiffBreakingChangesCount;
        $this->openapiDiffBumpType = $openapiDiffBumpType;
        $this->openapiDiffReportDigest = $openapiDiffReportDigest;
        $this->publishPackageName = $publishPackageName;
        $this->publishPackageRegistryName = $publishPackageRegistryName;
        $this->publishPackageUrl = $publishPackageUrl;
        $this->publishPackageVersion = $publishPackageVersion;
        $this->rawCommand = $rawCommand;
        $this->repoLabel = $repoLabel;
        $this->sourceBlobDigest = $sourceBlobDigest;
        $this->sourceNamespaceName = $sourceNamespaceName;
        $this->sourceRevisionDigest = $sourceRevisionDigest;
        $this->workflowLockPostRaw = $workflowLockPostRaw;
        $this->workflowLockPreRaw = $workflowLockPreRaw;
        $this->workflowPostRaw = $workflowPostRaw;
        $this->workflowPreRaw = $workflowPreRaw;
    }
}