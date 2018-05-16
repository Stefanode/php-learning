<?php

$config = require __DIR__ . '/../config.php';

require 'Router.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';

return new QueryBuilder(Connection::make($config['database']));
