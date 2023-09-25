<?php
require '../../vendor/autoload.php';

use Makaroni\Core\Server\Server;
use Makaroni\Core\Route\Router;

$uri = (new Server)->getUri();

$route = Router::getInstance()->load('../route/route.php')->find($uri);

$controller = new $route['controller'];
call_user_func([$controller, $route['method']], $route);
