<?php

use framework\Database\Database;

require 'helpers.php';
require 'config.php';


$database = new Database($config);
$tasks = $database->selectAll('tasks');
$greeting = greet();


