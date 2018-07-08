<?php

namespace Railken\LaraOre\Catalogue;

use Faker\Factory;
use Railken\Bag;
use Railken\Laravel\Manager\BaseFaker;

class CatalogueFaker extends BaseFaker
{
    /**
     * @var string
     */
    protected $manager = CatalogueManager::class;

    /**
     * @return \Railken\Bag
    /**
     * @return array
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('name', $faker->name);
        $bag->set('description', $faker->text);
        $bag->set('enabled', 1);
        $bag->set('notes', $faker->text);

        return $bag;
    }
}
