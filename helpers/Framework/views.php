<?php

if (!function_exists('view')) {
    /**
     * Render a view file.
     *
     * @param string $view The view file path relative to the views directory.
     * @param array $data Data to pass to the view.
     * @return void
     */
    function view($view, $data = [])
    {
        // Base path to the views directory
        $baseViewPath = __DIR__ . '/../../app/views/';
        $viewPath = $baseViewPath . $view . '.php';

        if (file_exists($viewPath)) {
            extract($data);
            require $viewPath;
        } else {
            throw new Exception("View file not found: $viewPath");
        }
    }
}