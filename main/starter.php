<?php

use Makaroni\Core\View\View;
use Makaroni\Core\Route\Router;
use Makaroni\Core\Config\Config;
use Makaroni\Core\Request\Request;
//use Makaroni\Core\Database\Connection;

app()->bind('config', fn () => new Config(include('config/config.php')));
app()->bind('request', fn () => new Request);
app()->bind('view', fn () => new View('../view/', '.view.php'));
app()->singleton('router', fn () => new Router);
//app()->singleton('connection', fn() => (new Connection)->setOptions(config('database'))->connect());