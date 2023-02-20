<?php
namespace Makaroni\Framework\Route;

use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

class Router
{

    private static $router;

    private static $routes;

    private function __construct()
    {
        static::$routes = new RouteCollection();

    }

    public static function getInstance(): object {
        if(self::$router == null) { 
			$router=self::$router = new Router();
		}
		return $router;
    }
    

    public function add(string $path, array $defaults, string $name): void
    {
        $route = new Route($path, $defaults);
        static::$routes->add($name, $route);

    }

    public function load(): object
    {
        require_once '../../main/route/route.php';
        return $this;
    }
    
    public function find(string $pathinfo): array
    {
        $context = new RequestContext();
        $matcher = new UrlMatcher(static::$routes, $context);
        return $matcher->match($pathinfo);
    }
}