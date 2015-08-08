<?php

namespace Bolar\Frontend\Controllers;


use Bolar\Frontend\Models\Gallery;
use Bolar\Frontend\Models\Products;

class ProductsController extends ControllerBase
{
    public function indexAction()
    {
        $product_model = Products::find();
        $this->view->setVar('products', $product_model);
    }

    public function productMoreAction($id)
    {
//        $this->view->disable();
        if ($this->request->isGet()) {
            $product_model = Products::findFirst("id = '$id'");
            $this->view->setVar('more', $product_model);

            if ($product_model) {
//            echo json_encode($product_model->toArray());
//                echo $gallery = Gallery::findFirst(array(" product_id = '$id'"));
                echo $product_model->getDescription(). "\n";
                echo $product_model->getPrice(). "\n";
                echo $product_model->getAvailable(). "\n";
            }
        }
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
