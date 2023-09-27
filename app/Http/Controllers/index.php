<?php


use framework\App;

require 'app/index.php';
require 'resources/views/index.blade.php';

$tasks = App::get('database')->selectAll('tasks');

$greeting = greet();