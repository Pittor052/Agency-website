<?php

return new \Phalcon\Config(array(
	'database' => array(
		'adapter'  => 'Mysql',
		'host'     => 'localhost',
		'username' => '',
		'password' => '',
		'name'     => '',
	),
	'application' => array(
		'controllersDir' => __DIR__ . '/../controllers/',
		'modelsDir' => __DIR__ . '/../models/',
		'viewsDir' => __DIR__ . '/../views/'
	)
));
