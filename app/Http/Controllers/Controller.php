<?php

namespace App\Http\Controllers;

use Velolia\Auth\Access\AuthorizesRequests;
use Velolia\Http\ControllerMiddlewareOptions;

abstract class Controller
{
    use AuthorizesRequests;

    protected array $middleware = [];

    public function middleware(string $middleware, array $options = []): ControllerMiddlewareOptions
    {
        $this->middleware[] = [
            'middleware' => $middleware,
            'options' => &$options,
        ];

        return new ControllerMiddlewareOptions($options);
    }

    public function getMiddleware(): array
    {
        return $this->middleware;
    }
}