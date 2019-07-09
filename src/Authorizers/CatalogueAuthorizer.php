<?php

namespace Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class CatalogueAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'catalogue.create',
        Tokens::PERMISSION_UPDATE => 'catalogue.update',
        Tokens::PERMISSION_SHOW   => 'catalogue.show',
        Tokens::PERMISSION_REMOVE => 'catalogue.remove',
    ];
}
