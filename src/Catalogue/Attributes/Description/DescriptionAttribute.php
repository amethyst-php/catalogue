<?php

namespace Railken\LaraOre\Catalogue\Attributes\Description;

use Railken\Laravel\Manager\Attributes\BaseAttribute;
use Railken\Laravel\Manager\Contracts\EntityContract;
use Railken\Laravel\Manager\Tokens;
use Respect\Validation\Validator as v;

class DescriptionAttribute extends BaseAttribute
{
    /**
     * Name attribute.
     *
     * @var string
     */
    protected $name = 'description';

    /**
     * Is the attribute required
     * This will throw not_defined exception for non defined value and non existent model.
     *
     * @var bool
     */
    protected $required = false;

    /**
     * Is the attribute unique.
     *
     * @var bool
     */
    protected $unique = false;

    /**
     * List of all exceptions used in validation.
     *
     * @var array
     */
    protected $exceptions = [
        Tokens::NOT_DEFINED    => Exceptions\CatalogueDescriptionNotDefinedException::class,
        Tokens::NOT_VALID      => Exceptions\CatalogueDescriptionNotValidException::class,
        Tokens::NOT_AUTHORIZED => Exceptions\CatalogueDescriptionNotAuthorizedException::class,
        Tokens::NOT_UNIQUE     => Exceptions\CatalogueDescriptionNotUniqueException::class,
    ];

    /**
     * List of all permissions.
     */
    protected $permissions = [
        Tokens::PERMISSION_FILL => 'catalogue.attributes.description.fill',
        Tokens::PERMISSION_SHOW => 'catalogue.attributes.description.show',
    ];

    /**
     * Is a value valid ?
     *
     * @param EntityContract $entity
     * @param mixed          $value
     *
     * @return bool
     */
    public function valid(EntityContract $entity, $value)
    {
        return v::length(1, 255)->validate($value);
    }
}
