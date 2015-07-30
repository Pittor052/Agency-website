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