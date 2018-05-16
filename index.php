<?php

$query = require 'core/bootstrap.php';

$routes = new Router;

require 'routes.php';

require $routes->direct('about');