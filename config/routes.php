<?php

$router->add('/admin', array(
    'namespace' => 'Bolar\Admin\Controllers',
    'module' => 'admin',
    'controller' => 'index',
    'action' => 'index'
))->setName('admin-enter');

$router->add('/admin/create/product', array(
    'namespace' => 'Bolar\Admin\Controllers',
    'module' => 'admin',
    'controller' => 'index',
    'action' => 'createProduct'
))->setName('admin-create-product');

$router->add('/admin/upload', array(
    'namespace' => 'Bolar\Admin\Controllers',
    'module' => 'admin',
    'controller' => 'index',
    'action' => 'upload'
))->setName('admin-upload');

$router->add('/admin/gallery', array(
    'namespace' => 'Bolar\Admin\Controllers',
    'module' => 'admin',
    'controller' => 'index',
    'action' => 'gallery'
))->setName('admin-gallery');