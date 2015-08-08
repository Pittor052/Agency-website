<?php

namespace Bolar\Frontend\Controllers;


use Bolar\Frontend\Models\Gallery;
use Bolar\Frontend\Models\Products;

class ProductsController extends ControllerBase
{
    public function indexAction($id = null)
    {
        if ($id) {
            $productModel = Products::findFirst("id = '$id'");
        } else {
            $productModel = Products::find();
        }

        $this->view->setVar('products', $productModel);
    }


    public function listsAction()
    {
        if ($this->request->isGet()) {
            echo json_encode(Products::find()->toArray());
            exit;
        }
        echo json_encode(array('status' => '404 bad request'));
        exit;
    }


}
