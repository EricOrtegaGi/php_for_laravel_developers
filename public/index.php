<?php

use framework\App;

require '../vendor/autoload.php';
require '../framework/bootstrap.php';

$tasks = App::get('router')->redirect($_SERVER['REQUEST_URI']);

$greeting = greet();


