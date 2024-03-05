<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];



$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
];



routerController($uri, $routes);