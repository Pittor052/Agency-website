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
use Phalcon\Mvc\Model;


class DeleteController extends ControllerBase
{
    public function deleteContactAction($id)
    {
        $contacts = Contact::findFirst("id = '$id'");
        if (!$contacts) {
            return $this->flashSession->error('Something went wrong, please try again!');
        }

        $this->flashSession->success('Contact message is deleted !');
        return $this->response->redirect('/admin');
    }

    public function deleteProductAction($id)
    {
        $product = Products::findFirst("id = '$id'");
        if (empty($id) || empty($product)) {
            $this->flashSession->error('Something went wrong, please try again!');
            return $this->response->redirect('/admin');
        }

        $product->delete();
        $this->flashSession->success('Product is deleted !');
        return $this->response->redirect('/admin');
    }

    public function deleteGalleryAction($id)
    {
        $galleryModel = Gallery::findFirst("id = '$id'");
        if (empty($galleryModel) || empty($id)) {
            $this->flashSession->error('Something went wrong, please try again!');
            return $this->response->redirect('/admin');
        }

        $galleryModel->delete();
        $this->flashSession->success('Gallery picture is deleted !');
        return $this->response->redirect('/admin');
    }

    protected function sortGallery($id, $productId)
    {

    }
}