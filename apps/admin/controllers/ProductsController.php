<?php
/**
 * Created by PhpStorm.
 * User: lazaroff
 * Date: 15-7-29
 * Time: 16:49
 */

namespace Bolar\Admin\Controllers;


use Bolar\Admin\Controllers\ControllerBase;
use Bolar\Frontend\Models\Contact;
use Bolar\Frontend\Models\Gallery;
use Bolar\Frontend\Models\Products;

class ProductsController extends ControllerBase
{
    public function indexAction($id = null)
    {
        if ($id) {
            $productsModel = Products::findFirst("id = '$id'");
        } else {
            $productsModel = Products::find();
        }
        $this->view->setVar("products", $productsModel);
    }


    public function addAction()
    {
        if ($this->request->isPost()) {
            if ($this->request->hasFiles(true) == false) {
                $this->getDi()->getFlashSession()->error('Please select an image');
                return $this->response->redirect('/admin');
            }
            $productsModel = new Products();
            $productsModel
                ->setName($this->request->getPost()['name'])
                ->setCat($this->request->getPost()['category'])
                ->setDescription($this->request->getPost()['description'])
                ->setPrice($this->request->getPost()['price']);
            if (!$productsModel->save()) {
                $productsModel->setErr();
            }
            $this->uploadToGallery($productsModel);
        }
        $this->view->setVar('flash', $this->flash);
    }

    public function editAction($id)
    {
        if ($this->request->isPost()) {
            if ($this->request->hasFiles(true) == false) {
                $this->getDi()->getFlashSession()->error('Please select an image');
                return $this->response->redirect('/admin/products');
            } else if (!empty($id) && $this->request->isGet()) {
                $productsModel = Products::findFirst("id = '$id'");
                $productsModel
                    ->setName($this->request->getPost()['name'])
                    ->setCat($this->request->getPost()['category'])
                    ->setDescription($this->request->getPost()['description'])
                    ->setPrice($this->request->getPost()['price']);
                if (!$productsModel->save()) {
                    $productsModel->setErr();
                }
                $this->uploadToGallery($productsModel);
            }
        }
        $this->view->setVar('url', '/admin/products/edit/' . $id);
        $this->view->setVar('editData', $productsModel);
        $this->view->setVar('flash', $this->flash);
    }


    public function deleteAction($id)
    {
        $product = Products::findFirst("id = '$id'");
        if (empty($id) || empty($product)) {
            $this->flashSession->error('Something went wrong, please try again!');
            return $this->response->redirect('/admin/products');
        }

        $product->delete();
        $this->flashSession->success('Product is deleted !');
        return $this->response->redirect('/admin/products');
    }
}