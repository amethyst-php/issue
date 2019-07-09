<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\IssuesController::class,
    'router'     => [
        'as'     => 'issue.',
        'prefix' => '/issues',
    ],
];
