<?php

use Makaroni\Core\Route\Router;
use Makaroni\Core\Request\Request;
//use Makaroni\Core\Database\Connection;

app()->bind('config', fn () => include('config/config.php'));
app()->bind('request', fn () => new Request);
app()->singleton('router', fn () => new Router);
//app()->singleton('connection', fn() => (new Connection)->setOptions(config('database'))->connect());