<?php

namespace Railken\Amethyst\Fakers;

use Faker\Factory;
use Illuminate\Support\Facades\Config;
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
        $bag->set('status', TaxonomyFaker::make()->parameters()->toArray());
        $bag->set('status.parent.name', Config::get('amethyst.issue.data.issue.attributes.status.taxonomy'));
        $bag->set('issuable_type', \Railken\Amethyst\Models\Foo::class);
        $bag->set('issuable', FooFaker::make()->parameters()->toArray());

        return $bag;
    }
}
