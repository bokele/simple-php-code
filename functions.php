<?php

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}


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