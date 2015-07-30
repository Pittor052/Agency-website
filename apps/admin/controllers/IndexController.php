<?php
/**
 * Created by PhpStorm.
 * User: lazaroff
 * Date: 15-7-29
 * Time: 16:49
 */

namespace Bolar\Admin\Controllers;


use Bolar\Admin\Controllers\ControllerBase;
use Bolar\Frontend\Models\Gallery;

class IndexController extends ControllerBase
{
    public function indexAction()
    {
        $product_model = Products::find();
//        foreach ($product_model as $product) {
//            var_dump($product->getGallery());
//            exit;
//        }
        $this->view->setVar('products', $product_model);
    }

    public function createAction()
    {
        $this->view->disable();
        if ($this->request->hasFiles(true) == false) {
            $this->getDi()->getFlashSession()->error('Pleas select an image');
            return $this->response->redirect('admin');
        }

        if ($this->request->isPost()) {
            $productsModel = new Products();
            $productsModel
                ->setName($this->request->getPost()['name'])
                ->setCat($this->request->getPost()['category'])
                ->setDescription($this->request->getPost()['description'])
                ->setPrice($this->request->getPost()['price']);
            if (!$productsModel->save()) {
                $productsModel->setErr();
            }
            $folder = $this->request->getPost()['category'];
            if (!is_dir(__DIR__ . '/../../public/img/products/' . $folder . '/')) {
                mkdir(__DIR__ . '/../../public/img/products/' . $folder . '/', 0777);
            }

            foreach ($this->request->getUploadedFiles() as $file) {

                $galleryFileName = time() . '_' . $file->getName();
                $fullpath = __DIR__ . '/../../public/img/products/' . $folder . '/' . $galleryFileName;
                $file->moveTo($fullpath);
                $image = new \Phalcon\Image\Adapter\GD($fullpath);
                $image->resize(200, 200)->crop(200, 200);
                if (!$image->save()) {
                    var_dump($image);
                    exit;
                }
            }
            $data = array(
                'name' => $galleryFileName,
                'cat_id' => $this->request->getPost()['category'],
                'product_id' => $productsModel->getId()

            );

            //Insert record at gallery model from post rq
            $galleryModel = new Gallery();
            if (!$galleryModel->save($data)) {
                $galleryModel->setErr();
            }
        }
//        $this->view->setVar('flash', $this->flash);
        return $this->response->redirect('admin');
    }

    public function uploadAction()
    {
        $this->view->disable();
        if ($this->request->hasFiles(true) == false) {
            $this->getDi()->getFlashSession()->error("Please select image, category and try again!");
            $this->view->setVar('flash', $this->flash);
            return $this->response->redirect('admin');
        }

        if ($this->request->isPost()) {
            foreach ($this->request->getUploadedFiles() as $file) {
                $file->moveTo('/public/img/' . $file->getName());
                $galleryFileName = '/public/img/' . $file->getName();
            }

            $data = array(
                'name' => $galleryFileName,
                'cat_id' => $this->request->getPost()['category']
            );
            //Insert record at gallery model from post rq
            $galleryModel = new Gallery();
            if (!$galleryModel->save($data)) {
                $galleryModel->setErr();
                $this->view->setVar('flash', $this->flash);
            } else {
                $this->getDi()->getFlashSession()->success("Done!");
            }
        }
        return $this->response->redirect('admin');
    }

    public function listsAction()
    {
        if ($this->request->isGet()) {
            echo json_encode(Products::find()->toArray());
            exit;
            var_dump(Products::find()->toArray());
            exit;
        }
        echo json_encode(array('status' => '404 bad request'));
        exit;
    }

    public function galleryAction($catId = null, $picId = null)
    {

        if (empty($catId) && empty($picId)) {
            //case one
            $gallery = Gallery::find();

        } elseif (!empty($catId) && empty($picId)) {
            //case 2
            $gallery = Gallery::find(array("cat_id = '$catId'"));
//            var_dump(array("id = '$catId' AND id = '$picId'"));
        } elseif (!empty($catId) && !empty($picId)) {
            //case 3
            $gallery = Gallery::findFirst(array("cat_id = '$catId' AND id = '$picId'"));
        }

        //sanitize url and check for valid match

        if ($gallery) {
            echo json_encode($gallery->toArray());
            exit;
        }
        echo json_encode(array('status' => 'not found'));
        exit;
    }
}