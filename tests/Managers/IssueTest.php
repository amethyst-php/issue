<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\IssueFaker;
use Railken\Amethyst\Managers\IssueManager;
use Railken\Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class IssueTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = IssueManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = IssueFaker::class;
}
