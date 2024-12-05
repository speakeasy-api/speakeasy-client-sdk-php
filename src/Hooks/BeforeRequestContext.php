<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */


declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Hooks;

class BeforeRequestContext extends HookContext
{
    public function __construct(HookContext $hookCtx)
    {
        parent::__construct($hookCtx->operationID, $hookCtx->oauth2Scopes, $hookCtx->securitySource);
    }
}
