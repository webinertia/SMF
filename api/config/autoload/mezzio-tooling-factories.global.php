<?php

/**
 * This file generated by Mezzio\Tooling\Factory\ConfigInjector.
 *
 * Modifications should be kept at a minimum, and restricted to adding or
 * removing factory definitions; other dependency types may be overwritten
 * when regenerating this file via mezzio-tooling commands.
 */
 
declare(strict_types=1);

return [
    'dependencies' => [
        'factories' => [
            App\EndPoint\BoardsHandler::class => App\EndPoint\BoardsHandlerFactory::class,
            App\EndPoint\RepliesHandler::class => App\EndPoint\RepliesHandlerFactory::class,
            App\EndPoint\TopicsHandler::class => App\EndPoint\TopicsHandlerFactory::class,
            App\EndPoint\UsersHandler::class => App\EndPoint\UsersHandlerFactory::class,
        ],
    ],
];
