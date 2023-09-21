<?php

require 'helpers.php';
require 'Task.php';
require 'config.php';
require 'Database.php';
$tasks = fetchAllTasks(connectDB($config));

//$database = new Database(); -> no utilitzem amb laravel csi mai new -> DI i container
//$tasks = $database->selectAll('tasks');

$tasks = Database::selectAll('tasks'); //--> cridaestatica sense new
$tasks = Task::selectAll('tasks'); //--> laravel eloquent

$greeting = greet();