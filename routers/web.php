<?php

require_once 'RouteManager.php';

use App\RouteManager;

function addRoute($name, $path, $controller, $method) {
    RouteManager::addRoute($name, $path, $controller, $method);
}
