<?php

/**
 * Register application modules
 */

$application->registerModules(array(
	'frontend' => array(
		'className' => 'Bolar\Frontend\Module',
		'path' => __DIR__ . '/../apps/frontend/Module.php'
	),
    'admin' => array(
        'className' => 'Bolar\Admin\Module',
        'path' => __DIR__ . '/../apps/admin/Module.php'
    )
));