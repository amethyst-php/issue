<?php

namespace Railken\Amethyst\Tests;

abstract class BaseTest extends \Orchestra\Testbench\TestCase
{
    /**
     * Setup the test environment.
     */
    public function setUp()
    {
        $dotenv = new \Dotenv\Dotenv(__DIR__.'/..', '.env');
        $dotenv->load();

        parent::setUp();

        $this->artisan('migrate:fresh');

        app('amethyst')->pushMorphRelation('issue', 'issuable', 'foo');
    }

    protected function getPackageProviders($app)
    {
        return [
            \Railken\Amethyst\Providers\IssueServiceProvider::class,
            \Railken\Amethyst\Providers\FooServiceProvider::class,
        ];
    }
}
