<?php

use Brikphp\Core\Router\ShadowRouter;

$router = new ShadowRouter();

$router->get('home', '/', function () {
    return new Brikphp\Http\Response(
        200, 
        ['Content-Type' => 'application/json'], 
        json_encode(["message" => "hello World"], JSON_UNESCAPED_UNICODE)
    );
});

return $router;