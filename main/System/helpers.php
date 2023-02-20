<?php

use Makaroni\Framework\Config\Config;
use Makaroni\Framework\Request\Request;
use Makaroni\Framework\View\View;

function view(string $view, array|null $data = null): void
{
    (new View)->make($view, $data);
}

function config(string|int $key): mixed
{
    return (new Config)->get($key);
}

function request(): object
{
    return new Request();
}

function redirect(string $path): void
{
    header("Location: $path");
}

function vd(mixed $data): void
{
    exit("<pre>". var_dump($data). "</pre>");
}