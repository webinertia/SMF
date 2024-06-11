<?php

declare(strict_types=1);

namespace App\EndPoint;

use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

trait HttpMethodAwareTrait
{
    public function handle(ServerRequestInterface $request) : ResponseInterface
    {
        try {
            return $this->handleHttpMethod($request);
        } catch (\Throwable $th) {
            return new JsonResponse([], (int) $th->getCode());
        }
    }

    protected function handleHttpMethod(ServerRequestInterface $request)
    {
        return match($request->getMethod()) {
            'GET'    => $this->handleGet($request),
            'POST'   => $this->handlePost($request),
            'PUT'    => $this->handlePut($request),
            'DELETE' => $this->handleDelete($request),
            default  => throw new Exception\MethodNotAllowedException('405')
        };
    }
}
