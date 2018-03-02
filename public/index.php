<?php

/** Require bootstrap.php */
require_once __DIR__ . '/../bootstrap/app.php';

/** Emit our response */
$container->get('emitter')->emit($response);