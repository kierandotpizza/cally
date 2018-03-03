<?php

/** Set out container variable to a new League Container */
$container = new League\Container\Container;

$container->delegate(
  new League\Container\ReflectionContainer()
);

/** Add our AppServiceProvider to our container */
$container->addServiceProvider(new App\Providers\AppServiceProvider);
$container->addServiceProvider(new App\Providers\ViewServiceProvider);
$container->addServiceProvider(new App\Providers\ConfigServiceProvider);