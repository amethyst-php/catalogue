<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\CatalogueFaker;
use Amethyst\Managers\CatalogueManager;
use Amethyst\Tests\BaseTest;
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
