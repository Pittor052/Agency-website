<?php
/**
 * Created by PhpStorm.
 * User: lazaroff
 * Date: 15-7-29
 * Time: 16:53
 */

namespace Bolar\Frontend\Controllers;

use Bolar\Frontend\Models\Gallery;
use Phalcon\Filter;
use Phalcon\Mvc\Url;

class GalleryController
{
    public function uploadAction()
    {
        if ($this->request->hasFiles() == true) {
            foreach ($this->request->getUploadedFiles() as $file) {
                $file->moveTo('/var/www/Agency-website/public/img/' . $file->getName());
                $galleryFileName = '/var/www/Agency-website/public/img/' . $file->getName();
            }

            //Insert record at gallery model from post rq
            $this->request->getPost();
            $galleryModel = new Gallery();
            $galleryModel->setName($galleryFileName)
                ->setCatId($this->request->getPost()['category']);
            if (!$galleryModel->save()) {
                //flashErrors
                $this->flash->error("No category selected!");
            } else {
                //flashErrors
                $this->flash->success("DONE!");
            }
        }
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

    public function indexAction()
    {
//        $a = Gallery::find();
//        $postModel = Post::find("issue = 0");
//        $this->view->setVar('data', $postModel);
//        $this->view->setVar('gallery', $a->toArray());


    }
}