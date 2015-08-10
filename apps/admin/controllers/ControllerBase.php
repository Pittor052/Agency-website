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
    protected function uploadToGallery($productsModel = null, $folder = null, $returnGalleryId = false, array $crop = null)
    {
        //If not pass folder name, get from category
        if (empty($folder) && empty($this->request->getPost()['category'])) {
            return false;
        } elseif (empty($folder) && $this->request->getPost()['category']) {
            $folder = $this->request->getPost()['category'];
        }
        $dir = __DIR__ . '/../../../public/img/products/' . $folder . '/';
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }

        foreach ($this->request->getUploadedFiles() as $file) {

            $galleryFileName = time() . '_' . $file->getName();
            $fullPath = $dir . $galleryFileName;
            $filePathAndName = '/img/products/' . $folder . '/' . $galleryFileName;
            $file->moveTo($fullPath);
            $image = new \Phalcon\Image\Adapter\GD($fullPath);
            if ($crop) {
                $image->crop($crop['width'], $crop['height']);
            } else {
                $image->crop(400, 400);
            }
            if (!$image->save()) {
                var_dump($image);
                exit;
            }
        }
        $data = array(
            'name' => $filePathAndName,
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
        } elseif ($returnGalleryId) {
            $this->getDi()->getFlashSession()->success("Done!");
            return $galleryModel->getId();
        }
    }
}