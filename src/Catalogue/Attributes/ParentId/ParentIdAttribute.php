<?php

namespace Railken\LaraOre\Catalogue\Attributes\ParentId;

use Railken\Laravel\Manager\Attributes\BelongsToAttribute;
use Railken\Laravel\Manager\Contracts\EntityContract;
use Railken\Laravel\Manager\Tokens;

class ParentIdAttribute extends BelongsToAttribute
{
    /**
     * Name attribute.
     *
     * @var string
     */
    protected $name = 'parent_id';

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
        Tokens::NOT_DEFINED    => Exceptions\CatalogueParentIdNotDefinedException::class,
        Tokens::NOT_VALID      => Exceptions\CatalogueParentIdNotValidException::class,
        Tokens::NOT_AUTHORIZED => Exceptions\CatalogueParentIdNotAuthorizedException::class,
        Tokens::NOT_UNIQUE     => Exceptions\CatalogueParentIdNotUniqueException::class,
    ];

    /**
     * List of all permissions.
     */
    protected $permissions = [
        Tokens::PERMISSION_FILL => 'catalogue.attributes.parent_id.fill',
        Tokens::PERMISSION_SHOW => 'catalogue.attributes.parent_id.show',
    ];

    /**
     * Retrieve the name of the relation.
     *
     * @return string
     */
    public function getRelationName()
    {
        return 'parent';
    }

    /**
     * Retrieve eloquent relation.
     *
     * @param \Railken\LaraOre\Catalogue\Catalogue $entity
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getRelationBuilder(EntityContract $entity)
    {
        return $entity->parent();
    }

    /**
     * Retrieve relation manager.
     *
     * @param \Railken\LaraOre\Catalogue\Catalogue $entity
     *
     * @return \Railken\Laravel\Manager\Contracts\ManagerContract
     */
    public function getRelationManager(EntityContract $entity)
    {
        return new \Railken\LaraOre\Catalogue\CatalogueManager($this->getManager()->getAgent());
    }
}
