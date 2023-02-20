<?php
require '../../vendor/autoload.php';

use Makaroni\Framework\Route\Router;
use Makaroni\Framework\Server\Server;

$uri = (new Server)->getUri();

$route = Router::getInstance()->load()->find($uri);

$controller = new $route['_controller'];
call_user_func([$controller, $route['_method']], $route);
