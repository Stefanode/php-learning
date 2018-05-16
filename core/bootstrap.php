<?php

$app = [];

$app['config'] = require __DIR__ . '/../config.php';

require 'Router.php';
require 'Request.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';

$app['database'] = new QueryBuilder(Connection::make($app['config']['database']));
