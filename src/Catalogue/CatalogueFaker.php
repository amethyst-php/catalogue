<?php

namespace Railken\LaraOre\Catalogue;

use Faker\Factory;
use Railken\Bag;

class CatalogueFaker
{
    /**
     * @return array
     */
    public static function make()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('name', $faker->name);
        $bag->set('description', $faker->realText);

        return $bag;
    }
}
