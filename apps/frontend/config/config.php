<?php

return new \Phalcon\Config(array(
    'database' => array(
        'adapter'  => 'Mysql',
        'host'     => 'localhost',
        'username' => 'root',
        'password' => '05205',
        'dbname'   => 'blog',
        'charset'  => 'utf8',
    ),
    'application' => array(
        'controllersDir' => __DIR__ . '/../controllers/',
        'modelsDir'      => __DIR__ . '/../models/',
        'migrationsDir'  => __DIR__ . '/../migrations/',
        'cacheDir'       =>__DIR__.'/../cache/',
        'viewsDir'       => __DIR__ . '/../views/',
        'baseUri'        => '/bolar/'
    )
));
