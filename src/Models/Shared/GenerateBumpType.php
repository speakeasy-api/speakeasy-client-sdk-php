<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Models\Shared;


/** Bump type of the lock file (calculated semver delta, custom change (manual release), or prerelease/graduate) */
enum GenerateBumpType: string
{
    case Major = 'major';
    case Minor = 'minor';
    case Patch = 'patch';
    case Custom = 'custom';
    case Graduate = 'graduate';
    case Prerelease = 'prerelease';
    case None = 'none';
}
