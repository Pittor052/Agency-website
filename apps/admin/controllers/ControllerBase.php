<?php

namespace Bolar\Admin\Controllers;

use Bolar\Frontend\Models\Gallery;
use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    /**
     * @return mixed
     */
    protected function responseHandling($msg = null, $url = null)
    {
        if (empty($url)) {
            $url = '/admin';
        }
        if (empty($msg)) {
            $msg = 'Something went wrong, please try again later!';
        }
        if (empty($this->flashSession->has())) {
            $this->flashSession->error($msg);
        }
        return $this->response->redirect($url);
    }

    /**
     * @param $productsModel
     */
    protected function uploadToGallery($productsModel = null)
    {
        $folder = $this->request->getPost()['category'];

        if (!is_dir(__DIR__ . '/../../../public/img/products/' . $folder . '/')) {
            mkdir(__DIR__ . '/../../../public/img/products/' . $folder . '/', 0777);
        }

        foreach ($this->request->getUploadedFiles() as $file) {

            $galleryFileName = time() . '_' . $file->getName();
            $fullPath = __DIR__ . '/../../../public/img/products/' . $folder . '/' . $galleryFileName;
            $file->moveTo($fullPath);
            $image = new \Phalcon\Image\Adapter\GD($fullPath);
            $image->crop(400, 400);
            if (!$image->save()) {
                var_dump($image);
                exit;
            }
        }
        $data = array(
            'name' => $galleryFileName,
            'cat_id' => $this->request->getPost()['category'],
        );
        if ($productsModel) {
            $data['product_id'] = $productsModel->getId();
        }
        //Insert record at gallery model from post rq
        $galleryModel = new Gallery();
        if (!$galleryModel->save($data)) {
            $galleryModel->setErr();
            $this->view->setVar('flash', $this->flash);
        } else {
            $this->getDi()->getFlashSession()->success("Done!");
        }
    }
}