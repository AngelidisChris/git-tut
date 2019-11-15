<?php

$config = require 'config.php';
require 'database/Database.php';
require 'database/QueryBuilder.php';


return new QueryBuilder(
    Database::make($config['database'])
);