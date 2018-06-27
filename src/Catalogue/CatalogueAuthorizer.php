<?php

namespace Railken\LaraOre\Catalogue;

use Railken\Laravel\Manager\ModelAuthorizer;
use Railken\Laravel\Manager\Tokens;

class CatalogueAuthorizer extends ModelAuthorizer
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
