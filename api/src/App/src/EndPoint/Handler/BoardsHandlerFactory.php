<?php

declare(strict_types=1);

namespace App\EndPoint\Handler;

use Psr\Container\ContainerInterface;

class BoardsHandlerFactory
{
    public function __invoke(ContainerInterface $container) : BoardsHandler
    {
        return new BoardsHandler();
    }
}
