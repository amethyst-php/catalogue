<?php

namespace Railken\Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class CatalogueFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('name', $faker->name);
        $bag->set('description', $faker->text);
        $bag->set('enabled', 1);
        $bag->set('notes', $faker->text);
        $bag->set('parent', [
            'name'        => $faker->name,
            'description' => $faker->text,
            'enabled'     => 1,
            'notes'       => $faker->text,
        ]);

        return $bag;
    }
}
