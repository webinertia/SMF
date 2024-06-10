<?php

declare(strict_types=1);

namespace App\EndPoint;

use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class BoardsHandler implements RequestHandlerInterface
{
    public const TEST_FILE = __DIR__ . '/test.php';
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
