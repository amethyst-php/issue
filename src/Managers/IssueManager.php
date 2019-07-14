<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Issue newEntity()
 * @method \Amethyst\Schemas\IssueSchema getSchema()
 * @method \Amethyst\Repositories\IssueRepository getRepository()
 * @method \Amethyst\Serializers\IssueSerializer getSerializer()
 * @method \Amethyst\Validators\IssueValidator getValidator()
 * @method \Amethyst\Authorizers\IssueAuthorizer getAuthorizer()
 */
class IssueManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.issue.data.issue';
}
