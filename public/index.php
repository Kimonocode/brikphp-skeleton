<?php

use GuzzleHttp\Psr7\ServerRequest;
use function Http\Response\send;

use Brikphp\Core\App;

require dirname(__DIR__) . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$app = new App();

$response = $app->run(ServerRequest::fromGlobals());

send($response);




