<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class IssueAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'issue.create',
        Tokens::PERMISSION_UPDATE => 'issue.update',
        Tokens::PERMISSION_SHOW   => 'issue.show',
        Tokens::PERMISSION_REMOVE => 'issue.remove',
    ];
}
