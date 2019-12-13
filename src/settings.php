<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],

        // Database conection setting
        // Production
        /*
        'db' => [
            'host'          => 'localhost',
            'dbname'   => 'itgecoth_stockappdb',
            'user'         => 'itgecoth_stockappdb',
            'pass'        => 'SirUfb898'
        ],
        */

        // Localhost
        'db' => [
            'host'          => 'localhost',
            'dbname'   => 'stockappdb',
            'user'         => 'root',
            'pass'        => '1234'
        ],
    ],
];