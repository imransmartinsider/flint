<?php

require_once 'web.php';

use App\RouteManager;

addRoute('home', '/', 'App\Controllers\HomeController', 'index');
addRoute('office_home', '/office', 'App\Controllers\OfficeController', 'index');
addRoute('office_show', '/office/{id}', 'App\Controllers\OfficeController', 'show');


// Add more routes here as needed

$routes = RouteManager::getInstance()->getRoutes();

return $routes;
