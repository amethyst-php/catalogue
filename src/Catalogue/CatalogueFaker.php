<?php

namespace Railken\LaraOre\Catalogue;

use Railken\Bag;
use Faker\Factory;

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

        return $bag;
    }
}
