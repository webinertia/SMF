<?php

declare(strict_types=1);

namespace App\EndPoint\Handler;

use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class BoardsHandler implements RequestHandlerInterface
{
    public function __construct(

    ) {

    }

    public function handle(ServerRequestInterface $request) : ResponseInterface
    {
        return new JsonResponse([
            'board' => [
                'id' => 1,
                'title' => 'Test Board',
                'description' => 'This is a dummy description for this test board',
            ]
        ]);
    }
}
