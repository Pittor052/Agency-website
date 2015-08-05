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
        if (!$contacts->delete()) {
            //TODO do log
            // $contacts->setErr();
            // return $this->response->redirect('/admin');
        }
        $this->flashSession->success('Contact message is deleted !');
        return $this->response->redirect('/admin');
    }

    public function deleteProductAction($id)
    {
        $id = Products::find($id);
        //      TODO to do sort delete  gallery and products
        if ($id != null) {
            Products::findFirst($id)->delete();

        }
        if ($id->delete()) {
            $this->flashSession->success('Product is deleted !');
        } else {
            $this->flashSession->error('Something went wrong, please try again!');
        }
        return $this->response->redirect('/admin');
    }

    public function deleteGalleryAction($id, $productId)
    {

        $id = Gallery::find($id);
        $productId = Gallery::find($productId);


//      TODO to do sort delete  gallery and products
        if ($id != null) {
            Gallery::findFirst($id)->delete();

        }

        if ($id->delete()) {
            $this->flashSession->success('Gallery picture is deleted !');
        } else {
            $this->flashSession->error('Something went wrong, please try again!');
        }
        return $this->response->redirect('/admin');
    }

    protected function sortGallery($id, $productId)
    {

    }
}