<?php

declare(strict_types=1);

namespace App\EndPoint;

use Psr\Container\ContainerInterface;

class RepliesHandlerFactory
{
    public function __invoke(ContainerInterface $container) : RepliesHandler
    {
        return new RepliesHandler();
    }
}
