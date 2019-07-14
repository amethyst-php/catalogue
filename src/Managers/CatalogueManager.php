<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Catalogue                 newEntity()
 * @method \Amethyst\Schemas\CatalogueSchema          getSchema()
 * @method \Amethyst\Repositories\CatalogueRepository getRepository()
 * @method \Amethyst\Serializers\CatalogueSerializer  getSerializer()
 * @method \Amethyst\Validators\CatalogueValidator    getValidator()
 * @method \Amethyst\Authorizers\CatalogueAuthorizer  getAuthorizer()
 */
class CatalogueManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.catalogue.data.catalogue';
}
