<?php

if (!function_exists('view')) {

    function view(string $view, array $data = []): void
    {
        app()->get('view')->make($view, $data);
    }
}

if (!function_exists('config')) {

    function config(string|int $key): mixed
    {
        return app()->get('config')->get($key);
    }
}

if (!function_exists('request')) {

    function request(): object
    {
        return app()->get('request');
    }
}

if (!function_exists('router')) {

    function router(): object
    {
        return app()->get('router');
    }
}

if (!function_exists('redirect')) {

    function redirect(string $path): void
    {
        header("Location: $path");
    }
}

if (!function_exists('vd')) {

    function vd(...$args): void
    {
        exit(array_walk($args, fn ($arg) => var_dump($arg)));
    }
}

if (!function_exists('app')) {

    function app(): object
    {
        return \Makaroni\Core\App::getInstance();
    }
}
