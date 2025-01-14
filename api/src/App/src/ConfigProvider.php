<?php

declare(strict_types=1);

namespace App;

use Mezzio\Application;
use Mezzio\Container\ApplicationConfigInjectionDelegator;

/**
 * The configuration provider for the App module
 *
 * @see https://docs.laminas.dev/laminas-component-installer/
 */
class ConfigProvider
{
    /**
     * Returns the configuration array
     *
     * To add a bit of a structure, each section is defined in a separate
     * method which returns an array with its configuration.
     */
    public function __invoke(): array
    {
        return [
            'dependencies' => $this->getDependencies(),
            'routes'       => $this->getRoutes(),
            'templates'    => $this->getTemplates(),
        ];
    }

    /**
     * Returns the container dependencies
     */
    public function getDependencies(): array
    {
        return [
            'invokables' => [
                Handler\PingHandler::class => Handler\PingHandler::class,
            ],
            'factories'  => [
                // Handler\HomePageHandler::class => Handler\HomePageHandlerFactory::class,
            ],
            'delegators' => [
                Application::class => [
                    ApplicationConfigInjectionDelegator::class,
                ],
            ],
        ];
    }

    public function getRoutes(): array
    {
        return [
            [
                'path'            => '/api/ping',
                'name'            => 'api.ping',
                'middleware'      => Handler\PingHandler::class,
                'allowed_methods' => ['GET'],
            ],
            [
                'path'            => '/api/boards[/{id:[\d]+}]',
                'name'            => 'api.boards',
                'middleware'      => [
                    EndPoint\Middleware\BoardMiddleware::class,
                    EndPoint\Handler\BoardsHandler::class,
                ],
                'allowed_methods' => ['GET', 'POST', 'PUT', 'DELETE'],
            ],
            [
                'path'            => '/api/topics',
                'name'            => 'api.topics',
                'middleware'      => EndPoint\Handler\TopicsHandler::class,
                'allowed_methods' => ['GET', 'POST', 'PUT', 'DELETE'],
            ],
        ];
    }

    /**
     * Returns the templates configuration
     */
    public function getTemplates(): array
    {
        return [
            'paths' => [
                'app'    => [__DIR__ . '/../templates/app'],
                'error'  => [__DIR__ . '/../templates/error'],
                'layout' => [__DIR__ . '/../templates/layout'],
            ],
        ];
    }
}
