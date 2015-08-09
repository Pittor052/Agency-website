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

class GalleryController extends ControllerBase
{
    public function indexAction()
    {
        $galleryModel = Gallery::find();
        $this->view->setVar('gallery', $galleryModel);
    }

    public function uploadAction()
    {
        $this->view->disable();
        if ($this->request->hasFiles(true) == false) {
            $this->getDi()->getFlashSession()->error("Please select image and category and try again!");
            $this->view->setVar('flash', $this->flash);
            return $this->response->redirect('/admin');
        }

        if ($this->request->isPost()) {
            $this->uploadToGallery();
        }
        return $this->response->redirect('/admin');
    }
}