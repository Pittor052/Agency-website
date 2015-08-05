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

$router->add('/admin/contacts', array(
    'namespace' => 'Bolar\Admin\Controllers',
    'module' => 'admin',
    'controller' => 'index',
    'action' => 'listContacts'
))->setName('admin-contacts');

$router->add('/admin/delete/contact/:int', array(
    'namespace' => 'Bolar\Admin\Controllers',
    'module' => 'admin',
    'controller' => 'delete',
    'action' => 'deleteContact',
    'id' => 1
))->setName('admin-delete-contact');

$router->add('/admin/delete/product/:int', array(
    'namespace' => 'Bolar\Admin\Controllers',
    'module' => 'admin',
    'controller' => 'delete',
    'action' => 'deleteProduct',
    'id' => 1
))->setName('admin-delete-products');

$router->add('/admin/delete/gallery/:params', array(
    'namespace' => 'Bolar\Admin\Controllers',
    'module' => 'admin',
    'controller' => 'delete',
    'action' => 'deleteGallery',
    'params' => 1
))->setName('admin-delete-gallery');

$router->add('/authenticate', array(
    'namespace' => 'Bolar\Admin\Controllers',
    'module' => 'admin',
    'controller' => 'authenticate',
    'action' => 'index'
))->setName('admin-authenticate');


//ContentManagerController
$router->addPost('/admin/contnet-manager/home', array(
    'namespace' => 'Bolar\Admin\Controllers',
    'module' => 'admin',
    'controller' => 'content-manager',
    'action' => 'createHome'
))->setName('admin-content-manager');
