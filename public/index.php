<?php

use GuzzleHttp\Psr7\Response;
use Brikphp\Core\App;

require dirname(__DIR__) . '/vendor/autoload.php';

$app = new App();

try {
    
    $response = $app->run($app->fromGlobals());
    $app->emit($response);

} catch (Throwable $e) {
    $app->emit( new Response(
        500,
        ['Content-Type' => 'text/plain'],
        'Une erreur interne est survenue: ' . $e->getMessage()
    ));
}




