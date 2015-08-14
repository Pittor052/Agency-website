<?php

//Admin module
$router->add('/admin', array(
    'namespace' => 'Bolar\Admin\Controllers',
    'module' => 'admin',
    'controller' => 'index',
    'action' => 'index'
))->setName('admin-enter');

//Auth
$router->add('/authenticate', array(
    'namespace' => 'Bolar\Admin\Controllers',
    'module' => 'admin',
    'controller' => 'authenticate',
    'action' => 'index'
))->setName('admin-authenticate');

//Products LIST

$router->add('/admin/products', array(
    'namespace' => 'Bolar\Admin\Controllers',
    'module' => 'admin',
    'controller' => 'products',
    'action' => 'index'
))->setName('admin-product');

$router->add('/admin/products/:int', array(
    'namespace' => 'Bolar\Admin\Controllers',
    'module' => 'admin',
    'controller' => 'products',
    'action' => 'index',
    'id' => 1
))->setName('admin-product');

//Products Add
$router->add('/admin/products/add', array(
    'namespace' => 'Bolar\Admin\Controllers',
    'module' => 'admin',
    'controller' => 'products',
    'action' => 'add',
    'id' => 1
))->setName('admin-product-add');

//Products edit
$router->add('/admin/products/edit/:int', array(
    'namespace' => 'Bolar\Admin\Controllers',
    'module' => 'admin',
    'controller' => 'products',
    'action' => 'edit',
    'id' => 1
))->setName('admin-edit-product');

//Products delete
$router->add('/admin/products/delete/:int', array(
    'namespace' => 'Bolar\Admin\Controllers',
    'module' => 'admin',
    'controller' => 'products',
    'action' => 'delete',
    'id' => 1
))->setName('admin-delete-product');

//Gallery
$router->add('/admin/gallery', array(
    'namespace' => 'Bolar\Admin\Controllers',
    'module' => 'admin',
    'controller' => 'gallery',
    'action' => 'index'
))->setName('admin-gallery');

$router->add('/admin/gallery/upload', array(
    'namespace' => 'Bolar\Admin\Controllers',
    'module' => 'admin',
    'controller' => 'gallery',
    'action' => 'upload'
))->setName('admin-gallery-upload');

$router->add('/admin/delete/gallery/:params', array(
    'namespace' => 'Bolar\Admin\Controllers',
    'module' => 'admin',
    'controller' => 'delete',
    'action' => 'deleteGallery',
    'params' => 1
))->setName('admin-delete-gallery');

//Contact
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
//MailBox
$router->add('/admin/mailbox', array(
    'namespace' => 'Bolar\Admin\Controllers',
    'module' => 'admin',
    'controller' => 'mailbox',
    'action' => 'index'
))->setName('admin-mailbox');

<<<<<<< HEAD

$router->addGet('/admin/mailbox/get-unseen', array(
    'namespace' => 'Bolar\Admin\Controllers',
    'module' => 'admin',
    'controller' => 'mailbox',
    'action' => 'unseenMessages'
))->setName('admin-mailbox-unseen-messages');
=======
$router->add('/admin/mailbox/compose', array(
    'namespace' => 'Bolar\Admin\Controllers',
    'module' => 'admin',
    'controller' => 'mailbox',
    'action' => 'compose'
))->setName('admin-mailbox-compose');
>>>>>>> 31bf07a4477dd40d0b64babd1c2c1bbb7005a4a0

$router->add('/admin/mailbox/send', array(
    'namespace' => 'Bolar\Admin\Controllers',
    'module' => 'admin',
    'controller' => 'mailbox',
    'action' => 'send'
))->setName('admin-mailbox-send');

//getMailBoxAction
$router->add('/admin/mailbox/read', array(
    'namespace' => 'Bolar\Admin\Controllers',
    'module' => 'admin',
    'controller' => 'mailbox',
    'action' => 'getMailBox'
))->setName('admin-mailbox-read');

$router->add('/admin/mailbox/connect', array(
    'namespace' => 'Bolar\Admin\Controllers',
    'module' => 'admin',
    'controller' => 'mailbox',
    'action' => 'connect'
))->setName('admin-mailbox-read');

$router->add('/admin/mailbox/delete/contact/:int', array(
    'namespace' => 'Bolar\Admin\Controllers',
    'module' => 'admin',
    'controller' => 'mailbox',
    'action' => 'deleteContact',
    'id' => 1
))->setName('admin-delete-contact');

$router->add('/admin/mailbox/:int', array(
    'namespace' => 'Bolar\Admin\Controllers',
    'module' => 'admin',
    'controller' => 'mailbox',
    'action' => 'index',
    'id' => 1
))->setName('admin-mailbox-read-mail');

//ContentManagerController

$router->add('/admin/content-manager', array(
    'namespace' => 'Bolar\Admin\Controllers',
    'module' => 'admin',
    'controller' => 'content-manager',
    'action' => 'index'
))->setName('admin-content-manager');

$router->addPost('/admin/content-manager/create', array(
    'namespace' => 'Bolar\Admin\Controllers',
    'module' => 'admin',
    'controller' => 'content-manager',
    'action' => 'create'
))->setName('admin-content-manager-create');

$router->add('/admin/content-manager/edit/:params', array(
    'namespace' => 'Bolar\Admin\Controllers',
    'module' => 'admin',
    'controller' => 'content-manager',
    'action' => 'edit',
    'params' => 1
))->setName('admin-content-manager-edit');

$router->addGet('/admin/content-manager/delete/:int', array(
    'namespace' => 'Bolar\Admin\Controllers',
    'module' => 'admin',
    'controller' => 'content-manager',
    'action' => 'delete',
    'id' => 1
))->setName('admin-content-manager-delete');

//Frontend Module
$router->addGet('/products/:int', array(
    'namespace' => 'Bolar\Frontend\Controllers',
    'module' => 'frontend',
    'controller' => 'products',
    'action' => 'index',
    'id' => 1
))->setName('frontend-product');

$router->addGet('/products', array(
    'namespace' => 'Bolar\Frontend\Controllers',
    'module' => 'frontend',
    'controller' => 'products',
    'action' => 'index',
))->setName('frontend-product');

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