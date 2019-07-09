<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\IssueFaker;
use Amethyst\Managers\IssueManager;
use Amethyst\Tests\BaseTest;
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
