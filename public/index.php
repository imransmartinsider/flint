<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Routing\Router;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Loader\PhpFileLoader;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpFoundation\Request;



// Function to include PHP files recursively
function include_php_files_recursive($dir) {
    // Create a recursive iterator to iterate over all files and directories
    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS),
        RecursiveIteratorIterator::SELF_FIRST
    );

    // Iterate through each file found
    foreach ($iterator as $file) {
        if ($file->isFile() && $file->getExtension() === 'php') {
            include_once $file->getPathname();
        }
    }
}

// Specify the base directory containing your PHP files with functions
$baseDirectory = __DIR__ . '/../helpers/custom/';

// Include PHP files recursively
include_php_files_recursive($baseDirectory);

// Function to include all PHP files in a directory
function include_all_files($directory)
{
    foreach (glob($directory . '/*.php') as $filename) {
        require_once $filename;
    }
}

// Include all helpers in the framework directory
include_all_files(__DIR__ . '/../helpers/framework');

try {
    $locator = new FileLocator([__DIR__ . '/../routers']);
    $loader = new PhpFileLoader($locator);
    $routes = $loader->load('routes.php');

    $request = Request::createFromGlobals();
    $context = (new RequestContext())->fromRequest($request);

    $router = new Router($loader, 'routes.php', [], $context);

    $route = str_replace(dirname($_SERVER['SCRIPT_NAME']), '', $_SERVER['REQUEST_URI']);
    $parameters = $router->match($route);

    $controller = explode('::', $parameters['_controller']);
    $controllerInstance = new $controller[0]();
    $method = $controller[1];

    // Remove _controller and _route from parameters
    unset($parameters['_controller'], $parameters['_route']);

    $response = call_user_func_array([$controllerInstance, $method], $parameters);

    // Output the final view
    echo $response;
} catch (Exception $e) {
    http_response_code(404);
    echo "Error: " . $e->getMessage();
}
