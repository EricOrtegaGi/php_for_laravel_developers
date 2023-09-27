<?php

use framework\App;
use framework\Database\Database;

require 'app/helpers.php';


$tasks = App::get('database')->selectAll('tasks');

//$database = new Database(App::get('config')); -> laravel no utilitzarem gairebe mai new
//$tasks = $database->selectAll('tasks'); crida statica sense new
// $tasks = Task::selectAll('tasks'); -> laravel eloquent


$greeting = greet();


