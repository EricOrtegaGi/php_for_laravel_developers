<?php
use Framework\App;

require 'vendor/autoload.php';
require 'framework/bootstrap.php';

//If Route has params $_GET, save only the route in $uri
$uri = $_SERVER['REQUEST_URI'];
if (strpos($uri, '?') !== false) {
    $uri = substr($uri, 0, strpos($uri, '?'));
}
App::get('router')->render($uri);