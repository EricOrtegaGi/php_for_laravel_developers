<?php
use framework\App;
use framework\Database\Connection;
use framework\Database\Database;

//Laravel Service Providers
App::bind('config', require 'config.php');

App::bind('database', new Database(
    Connection::make(App::get('config')['database'])
));