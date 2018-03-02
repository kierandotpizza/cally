<?php

/** Start up sessions */
session_status();

/** Require autoloader */
require_once __DIR__ . '/../vendor/autoload.php';

/** Attempt to load the .env file through Dotenv */
try {
    $dotenv = (new Dotenv\Dotenv(__DIR__ . '/../'))->load();
} catch (Dotenv\Exception\InvalidPathException $e) {
    //
}

/** Require our container */
require_once __DIR__ . '/container.php';

/** Get our route collection */
$route = $container->get(League\Route\RouteCollection::class);

require_once __DIR__ . '/../routes/web.php';

/** Dispatch the request and response */
$response = $route->dispatch(
    $container->get('request'), $container->get('response')
);