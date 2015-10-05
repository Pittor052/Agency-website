<?php

namespace Bolar\Frontend\Controllers;


use Bolar\Frontend\Models\Gallery;
use Bolar\Frontend\Models\Products;

class ProductsController extends ControllerBase
{
    public function indexAction($id = null, $catId = null)
    {

        $this->setContentToView();
        if ($id && is_int($id)) {
            $productModel = Products::findFirst("id = '$id'");
        } elseif ($catId) {
            $productModel = Products::find("cat ='$id'");
        } else {
            $productModel = Products::find("id = '$id'");
        }

        $this->view->setVar('products', $productModel);
        $this->setContentToView('products');
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
