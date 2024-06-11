<?php

declare(strict_types=1);

namespace App\EndPoint;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

interface HttpMethodAwareInterface
{
    public function handleGet(ServerRequestInterface $request): ResponseInterface;
    public function handlePost(ServerRequestInterface $request): ResponseInterface;
    public function handlePut(ServerRequestInterface $request): ResponseInterface;
    public function handleDelete(ServerRequestInterface $request): ResponseInterface;
}
