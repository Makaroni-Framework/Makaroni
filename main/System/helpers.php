<?php

use Makaroni\Core\App;
use Makaroni\Core\Config\Config;
use Makaroni\Core\Request\Request;
use Makaroni\Core\View\View;


if (! function_exists('view')) {

    function view(string $view, array|null $data = null): void
    {
        (new View('../view/layouts/', '.layout.php'))->make('header', $data);
        (new View('../view/', '.view.php'))->make($view, $data);
        (new View('../view/layouts/', '.layout.php'))->make('footer', $data);
    }

}

if (! function_exists('config')) {

    function config(string|int $key): mixed
    {
        return (new Config(App::get('config')))->get($key);
    }

}

if (! function_exists('request')) {

    function request(): object
    {
        return new Request();
    }

}

if (! function_exists('redirect')) {

    function redirect(string $path): void
    {
        header("Location: $path");
    }

}

if (! function_exists('vd')) {

    function vd(mixed $data): void
    {
        exit("<pre>" . var_dump($data) . "</pre>");
    }

}
