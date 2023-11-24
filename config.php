<?php

return $config = [
    'database' => [
        'driver'   =>    $_ENV['DB_CONNECTION'],
        'host'     =>    $_ENV['DB_HOST'],
        'user'     =>    $_ENV['DB_USERNAME'],
        'password' =>    $_ENV['DB_PASSWORD'],
        'database' =>    $_ENV['DB_DATABASE']
    ]
 ];
