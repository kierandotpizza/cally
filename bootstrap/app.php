<?php

/** Start up sessions */
session_status();

/** Require autoloader */
require_once __DIR__ . '/../vendor/autoload.php';

/** Attempt to load the .env file through Dotenv */
try {
    $dotenv = (new Dotenv\Dotenv(base_path()))->load();
} catch (Dotenv\Exception\InvalidPathException $e) {
    //
}

/** Require our container */
require_once  base_path('/bootstrap/container.php');

/** Get our route collection */
$route = $container->get(League\Route\RouteCollection::class);

require_once base_path('routes/web.php');

/** Dispatch the request and response */
$response = $route->dispatch(
    $container->get('request'), $container->get('response')
);