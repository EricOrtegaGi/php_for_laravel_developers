<?php

use Framework\App;

$users = App::get('database')::selectAll('users');