<?php

declare(strict_types=1);

namespace App\EndPoint;

use Psr\Container\ContainerInterface;

class TopicsHandlerFactory
{
    public function __invoke(ContainerInterface $container) : TopicsHandler
    {
        return new TopicsHandler();
    }
}
