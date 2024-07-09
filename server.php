<?php

// Define the port you want to use
$port = 8000;

// Change directory to the public folder
chdir('public');

// Execute PHP built-in server command
$command = sprintf('php -S localhost:%d', $port);
echo "Flint development server started on http://localhost:$port\n";
passthru($command);
