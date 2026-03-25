<?php
    header('Content-Type: text/plain; charset=UTF-8');
    header('Access-Control-Allow-Origin: *');

    $requestUri = $_SERVER['REQUEST_URI'];
    $path = parse_url($requestUri, PHP_URL_PATH);


    if ($path === '/login/') {
        echo 'sergei.t.web';
    } elseif ($path === '/sample/') {
        echo 'function task(x) { return x * (this ** 2); }';
    } else {
        http_response_code(404);
        echo 'Not Found';
    }
?>
