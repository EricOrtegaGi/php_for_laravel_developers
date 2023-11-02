<?php

use framework\App;

$tasks = App::get('database')->selectAll('tasks');

$greeting = greet();

require 'resources/views/index.blade.php';