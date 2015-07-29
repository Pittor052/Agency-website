<?php

namespace Bolar\Admin;

use Phalcon\Loader;
use Phalcon\Mvc\View;
use Phalcon\DiInterface;
use Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;
use Phalcon\Mvc\ModuleDefinitionInterface;

class Module implements ModuleDefinitionInterface
{

    /**
     * Registers the module auto-loader
     */
    public function registerAutoloaders(\Phalcon\DiInterface $dependencyInjector = NULL)
    {

        $loader = new Loader();

        $loader->registerNamespaces(array(
            'Bolar\Admin\Controllers' => __DIR__ . '/controllers/',
            'Bolar\Admin\Models' => __DIR__ . '/models/',
        ));

        $loader->register();
    }

    /**
     * Registers the module-only services
     *
     * @param DiInterface $dependencyInjector
     */
    public function registerServices(\Phalcon\DiInterface $dependencyInjector)
    {

        /**
         * Read configuration
         */
        $config = include __DIR__ . "/config/config.php";

        /**
         * Setting up the view component
         */
        $dependencyInjector['view'] = function () {

            $view = new View();

            $view->setViewsDir(__DIR__ . '/views/');

            $view->registerEngines(array(
                ".volt" => 'Phalcon\Mvc\View\Engine\Volt'
            ));

            return $view;
        };

        /**
         * Database connection is created based in the parameters defined in the configuration file
         */
        $dependencyInjector['db'] = function () use ($config) {
            return new DbAdapter(array(
                "host" => $config->database->host,
                "username" => $config->database->username,
                "password" => $config->database->password,
                "dbname" => $config->database->name
            ));
        };
    }
}
