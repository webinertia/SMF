<?php

declare(strict_types=1);

namespace App\EndPoint\Handler;

use App\EndPoint\HttpMethodAwareInterface;
use App\EndPoint\HttpMethodAwareTrait;
use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class BoardsHandler implements RequestHandlerInterface, HttpMethodAwareInterface
{
    use HttpMethodAwareTrait;

    public function __construct(

    ) {
        //todo: bring in Repositories
    }

    /**
     * The standard handle method is implemented by the Trait and
     * proxies to the below methods based on Http Method
     */

    public function handleGet(ServerRequestInterface $request): ResponseInterface
    {
        return new JsonResponse([
            'board' => [
                'id' => 1,
                'title' => 'Test Board',
                'description' => 'This is a dummy description for this test board',
            ]
        ]);
    }

    public function handlePost(ServerRequestInterface $request): ResponseInterface { }

    public function handlePut(ServerRequestInterface $request): ResponseInterface { }

    public function handleDelete(ServerRequestInterface $request): ResponseInterface { }
}
