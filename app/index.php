<?php

use framework\Database\Database;

require 'app/helpers.php';
require 'app/Models/Task.php';
require 'config.php';
require 'framework/Database/Database.php';
require 'framework/Database/Connection.php';
$database = new Database($config);
$tasks = fetchAllTasks(connectDB($config));
//$database = new Database(); -> no utilitzem amb laravel csi mai new -> DI i container
//$tasks = $database->selectAll('tasks');

//$tasks = Database::selectAll('tasks'); //--> cridaestatica sense new
//$tasks = Task::selectAll('tasks'); //--> laravel eloquent

$greeting = greet();