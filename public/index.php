<?php

use Phalcon\Mvc\Application;

ini_set('display_errors', 'On');
error_reporting(E_ALL);

try {

	/**
	 * Include services
	 */
	require __DIR__ . '/../config/services.php';

	/**
	 * Handle the request
	 */
	$application = new Application();

	/**
	 * Assign the DI
	 */
	$application->setDi($di);

	/**
	 * Include modules
	 */
	require __DIR__ . '/../config/modules.php';

	echo $application->handle()->getContent();

} catch (\Exception $e) {
	echo $e->getMessage();
}
