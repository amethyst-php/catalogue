<?php

namespace Railken\LaraOre\Catalogue;

use Illuminate\Support\Facades\Config;
use Railken\Laravel\Manager\Contracts\AgentContract;
use Railken\Laravel\Manager\ModelManager;
use Railken\Laravel\Manager\Tokens;

class CatalogueManager extends ModelManager
{
    /**
     * Class name entity.
     *
     * @var string
     */
    public $entity;

    /**
     * List of all attributes.
     *
     * @var array
     */
    protected $attributes = [
        Attributes\Id\IdAttribute::class,
        Attributes\Name\NameAttribute::class,
        Attributes\CreatedAt\CreatedAtAttribute::class,
        Attributes\UpdatedAt\UpdatedAtAttribute::class,
        Attributes\DeletedAt\DeletedAtAttribute::class,
        Attributes\Description\DescriptionAttribute::class,
        Attributes\Enabled\EnabledAttribute::class,
        Attributes\Notes\NotesAttribute::class
    ];

    /**
     * List of all exceptions.
     *
     * @var array
     */
    protected $exceptions = [
        Tokens::NOT_AUTHORIZED => Exceptions\CatalogueNotAuthorizedException::class,
    ];

    /**
     * Construct.
     *
     * @param AgentContract $agent
     */
    public function __construct(AgentContract $agent = null)
    {
        $this->entity = Config::get('ore.catalogue.entity');
        $this->attributes = array_merge($this->attributes, array_values(Config::get('ore.catalogue.attributes')));

        $classRepository = Config::get('ore.catalogue.repository');
        $this->setRepository(new $classRepository($this));

        $classSerializer = Config::get('ore.catalogue.serializer');
        $this->setSerializer(new $classSerializer($this));

        $classAuthorizer = Config::get('ore.catalogue.authorizer');
        $this->setAuthorizer(new $classAuthorizer($this));

        $classValidator = Config::get('ore.catalogue.validator');
        $this->setValidator(new $classValidator($this));

        parent::__construct($agent);
    }
}
