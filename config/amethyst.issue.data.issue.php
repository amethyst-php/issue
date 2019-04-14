<?php

return [
    'table'      => 'amethyst_issues',
    'comment'    => 'Issue',
    'model'      => Railken\Amethyst\Models\Issue::class,
    'schema'     => Railken\Amethyst\Schemas\IssueSchema::class,
    'repository' => Railken\Amethyst\Repositories\IssueRepository::class,
    'serializer' => Railken\Amethyst\Serializers\IssueSerializer::class,
    'validator'  => Railken\Amethyst\Validators\IssueValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\IssueAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\IssueFaker::class,
    'manager'    => Railken\Amethyst\Managers\IssueManager::class,
    'attributes' => [
        'status' => [
            'taxonomy' => 'issue-status',
        ],
        'issuable' => [
            'options' => [],
        ],
    ],
];
