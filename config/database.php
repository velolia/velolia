<?php

return [
    'default' => 'mysql',
    'connections' => [
        'mysql' => [
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'port' => '3306',
            'username' => 'root',
            'password' => '',
            'database' => 'velolia',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
        ],
        'sqlite' => [
            'driver'   => 'sqlite',
            'database' => base_path('/database/database.sqlite'),
        ],
    ],
];