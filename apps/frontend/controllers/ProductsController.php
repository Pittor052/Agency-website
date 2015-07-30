<?php
/**
 * Created by PhpStorm.
 * User: lazaroff
 * Date: 15-7-29
 * Time: 16:53
 */

namespace Bolar\Frontend\Controllers;


use Bolar\Frontend\Models\Gallery;
use Bolar\Frontend\Models\Products;

class ProductsController extends ControllerBase
{
    public function indexAction()
    {
//        $product_model = Products::find();
////        foreach ($product_model as $product) {
////            var_dump($product->getGallery());
////            exit;
////        }
//        $this->view->setVar('products', $product_model);
    }

//    public function createAction()
//    {
//        $this->view->disable();
//        if ($this->request->hasFiles(true) == false) {
//            $this->getDi()->getFlashSession()->error('Pleas select an image');
//            return $this->response->redirect('admin');
//        }
//
//        if ($this->request->isPost()) {
//            $productsModel = new Products();
//            $productsModel
//                ->setName($this->request->getPost()['name'])
//                ->setCat($this->request->getPost()['category'])
//                ->setDescription($this->request->getPost()['description'])
//                ->setPrice($this->request->getPost()['price']);
//            if (!$productsModel->save()) {
//                $productsModel->setErr();
//            }
//            $folder = $this->request->getPost()['category'];
//            if (!is_dir(__DIR__ . '/../../public/img/products/' . $folder . '/')) {
//                mkdir(__DIR__ . '/../../public/img/products/' . $folder . '/', 0777);
//            }
//
//            foreach ($this->request->getUploadedFiles() as $file) {
//
//                $galleryFileName = time() . '_' . $file->getName();
//                $fullpath = __DIR__ . '/../../public/img/products/' . $folder . '/' . $galleryFileName;
//                $file->moveTo($fullpath);
//                $image = new \Phalcon\Image\Adapter\GD($fullpath);
//                $image->resize(200, 200)->crop(200, 200);
//                if (!$image->save()) {
//                    var_dump($image);
//                    exit;
//                }
//            }
//            $data = array(
//                'name' => $galleryFileName,
//                'cat_id' => $this->request->getPost()['category'],
//                'product_id' => $productsModel->getId()
//
//            );
//
//            //Insert record at gallery model from post rq
//            $galleryModel = new Gallery();
//            if (!$galleryModel->save($data)) {
//                $galleryModel->setErr();
//            }
//        }
////        $this->view->setVar('flash', $this->flash);
//        return $this->response->redirect('admin');
//    }

//    public function listsAction()
//    {
//        if ($this->request->isGet()) {
//            echo json_encode(Products::find()->toArray());
//            exit;
//            var_dump(Products::find()->toArray());
//            exit;
//        }
//        echo json_encode(array('status' => '404 bad request'));
//        exit;
//    }


}
