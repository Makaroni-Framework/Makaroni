<?php

use Makaroni\Core\App;
use Makaroni\Core\Config\Config;
use Makaroni\Core\Request\Request;
use Makaroni\Core\View\View;

function view(string $view, array|null $data = null): void
{
    (new View('../view/', '.php'))->make($view, $data);
}

function config(string|int $key): mixed
{
    return (new Config(App::get('config')))->get($key);
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