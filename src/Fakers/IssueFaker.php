<?php

namespace Railken\Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class IssueFaker extends Faker
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
        $bag->set('issuable_type', \Railken\Amethyst\Models\Foo::class);
        $bag->set('issuable', FooFaker::make()->parameters()->toArray());

        return $bag;
    }
}
