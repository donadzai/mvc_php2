<?php
if (!function_exists('is_upload')) {
    function is_upload($key)
    {
        return isset($_FILES[$key]) && $_FILES[$key]['size'] > 0;
    }
}

if (!function_exists('redirect')) {
    function redirect($path)
    {
        header('Location: ' . $path);
        exit;
    }
}

if (!function_exists('redirect404')) {
    function redirect404()
    {
        header('HTTP/1.1 404 Not Found');
        exit;
    }
}

if (!function_exists('file_url')) {
    function file_url($path)
    {
        if (!file_exists($path)) {
            return null;
        }

        return $_ENV['APP_URL'] . $path;
    }
}

if (!function_exists('debug')) {
    function debug(...$data)
    {
        echo '<pre>';
        print_r($data);
        die;
    }
}