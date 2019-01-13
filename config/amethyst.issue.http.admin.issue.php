<?php

return [
    'enabled'     => true,
    'controller'  => Railken\Amethyst\Http\Controllers\Admin\IssuesController::class,
    'router'      => [
        'as'        => 'issue.',
        'prefix'    => '/issues',
    ],
];
