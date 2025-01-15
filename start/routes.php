<?php

use Brikphp\Core\Kernel;
use Brikphp\Core\Router\RouterInterface;
use GuzzleHttp\Psr7\Response;

$router = Kernel::container()->get(RouterInterface::class);

$router->get('home', '/', function () {
    return new Response(200, ['Content-Type: text/html'], "<h1>Welcome To BrikPhp<h1/>");
});