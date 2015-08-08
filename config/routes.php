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
$router->addPost('/admin/contnet-manager/create', array(
    'namespace' => 'Bolar\Admin\Controllers',
    'module' => 'admin',
    'controller' => 'content-manager',
    'action' => 'create'
))->setName('admin-content-manager-create');

$router->addPost('/admin/contnet-manager/edit/:int', array(
    'namespace' => 'Bolar\Admin\Controllers',
    'module' => 'admin',
    'controller' => 'content-manager',
    'action' => 'edit',
    'id' => 1
))->setName('admin-content-manager-create');

$router->addPost('/admin/contnet-manager/delete/:int', array(
    'namespace' => 'Bolar\Admin\Controllers',
    'module' => 'admin',
    'controller' => 'content-manager',
    'action' => 'delete',
    'id' => 1
))->setName('admin-content-manager-create');


//Frontend
$router->addGet('/products/:int', array(
    'namespace' => 'Bolar\Frontend\Controllers',
    'module' => 'frontend',
    'controller' => 'products',
    'action' => 'index',
    'id' => 1
))->setName('frontend-products');

$router->addGet('/products', array(
    'namespace' => 'Bolar\Frontend\Controllers',
    'module' => 'frontend',
    'controller' => 'products',
    'action' => 'index',
))->setName('frontend-products');

$router->addGet('/services', array(
    'namespace' => 'Bolar\Frontend\Controllers',
    'module' => 'frontend',
    'controller' => 'services',
    'action' => 'index',
))->setName('frontend-services');

$router->addGet('/about', array(
    'namespace' => 'Bolar\Frontend\Controllers',
    'module' => 'frontend',
    'controller' => 'about',
    'action' => 'index',
))->setName('frontend-about');

$router->add('/contact', array(
    'namespace' => 'Bolar\Frontend\Controllers',
    'module' => 'frontend',
    'controller' => 'contact',
    'action' => 'index',
))->setName('frontend-contact');