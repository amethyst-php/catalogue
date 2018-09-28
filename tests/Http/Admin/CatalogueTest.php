<?php

namespace Railken\Amethyst\Tests\Http\Admin;

use Illuminate\Support\Facades\Catalogue;
use Railken\Amethyst\Api\Support\Testing\TestableBaseTrait;
use Railken\Amethyst\Fakers\CatalogueFaker;
use Railken\Amethyst\Tests\BaseTest;

class CatalogueTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = CatalogueFaker::class;

    /**
     * Router group resource.
     *
     * @var string
     */
    protected $group = 'admin';

    /**
     * Base path config.
     *
     * @var string
     */
    protected $config = 'amethyst.catalogue.http.admin.catalogue';
}
