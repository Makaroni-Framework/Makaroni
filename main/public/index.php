<?php
require '../../vendor/autoload.php';

use Makaroni\Core\Server\Server;
use Makaroni\Framework\Route\Router;

$uri = (new Server)->getUri();

$route = Router::getInstance()->load('../route/route.php')->find($uri);

$controller = new $route['_controller'];
call_user_func([$controller, $route['_method']], $route);
