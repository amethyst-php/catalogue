<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\CatalogueFaker;
use Railken\Amethyst\Managers\CatalogueManager;
use Railken\Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class CatalogueTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = CatalogueManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = CatalogueFaker::class;
}
