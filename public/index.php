<?php

use Brikphp\Core\App;

require dirname(__DIR__) . '/vendor/autoload.php';

$app = new App();

try {

    $request  = $app->fromGlobals();
    $response = $app->run($request);
    
    $app->emit($response);

} catch (Throwable $e) {

    $app->fail($e);
}




