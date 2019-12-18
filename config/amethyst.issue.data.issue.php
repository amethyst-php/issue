<?php

return [
    'table'      => 'amethyst_issues',
    'comment'    => 'Issue',
    'model'      => Amethyst\Models\Issue::class,
    'schema'     => Amethyst\Schemas\IssueSchema::class,
    'repository' => Amethyst\Repositories\IssueRepository::class,
    'serializer' => Amethyst\Serializers\IssueSerializer::class,
    'validator'  => Amethyst\Validators\IssueValidator::class,
    'authorizer' => Amethyst\Authorizers\IssueAuthorizer::class,
    'faker'      => Amethyst\Fakers\IssueFaker::class,
    'manager'    => Amethyst\Managers\IssueManager::class,
    'attributes' => [
        'status' => [
            'taxonomy' => 'Issue Status',
        ],
        'issuable' => [
            'options' => [],
        ],
    ],
];
