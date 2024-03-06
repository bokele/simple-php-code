<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];



$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/notes' => 'controllers/note.php',
];

function abort($code = 404)
{

    http_response_code($code);
    require "views/$code.view.php";

    die();
}


function routerController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

routerController($uri, $routes);
