<?php

namespace Framework;

use Framework\App;
use Framework\Database\Connection;
use Framework\Database\Database;
use Framework\Router;

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

$routes = require 'routes.php';

App::bind('config', require './config.php');

App::bind('database', new Database(
    Connection::make(App::get('config')['database'])
));

App::bind('router', (new Router())->define($routes));
