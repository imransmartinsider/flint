<?php

if (!function_exists('json')) {
    /**
     * Send a JSON response.
     *
     * @param mixed $data The data to be JSON encoded.
     * @param int $status HTTP status code (default is 200).
     * @param array $headers Additional headers to send with the response.
     * @return void
     */
    function json($data, $status = 200, $headers = [])
    {
        // Set the default Content-Type header to application/json
        header('Content-Type: application/json', true, $status);

        // Set additional headers if provided
        foreach ($headers as $header => $value) {
            header("$header: $value");
        }

        // Output the JSON encoded data
        echo json_encode($data);
        exit; // Ensure no further output is sent
    }
}
