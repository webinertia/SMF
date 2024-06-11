<?php

declare(strict_types=1);

namespace App\EndPoint\Middleware;

use Psr\Container\ContainerInterface;

class BoardMiddlewareFactory
{
    public function __invoke(ContainerInterface $container) : BoardMiddleware
    {
        return new BoardMiddleware();
    }
}
