<?php

namespace App;

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

class RouteManager
{
    private static $instance = null;
    private $routes;

    private function __construct()
    {
        $this->routes = new RouteCollection();
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getRoutes()
    {
        return $this->routes;
    }

    public static function addRoute($name, $path, $controller, $method)
    {
        self::getInstance()->routes->add($name, new Route($path, [
            '_controller' => $controller . '::' . $method,
        ]));
    }
}
