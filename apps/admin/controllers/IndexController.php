<?php
/**
 * Created by PhpStorm.
 * User-: lazaroff
 * Date: 15-7-29
 * Time: 16:49
 */

namespace Bolar\Admin\Controllers;


use Bolar\Admin\Controllers\ControllerBase;
use Bolar\Frontend\Models\Contact;
use Bolar\Frontend\Models\Gallery;
use Bolar\Frontend\Models\Products;

class IndexController extends ControllerBase
{
    public function indexAction()
    {
        $id = null;
        $contactModel = Contact::find();
        $galleryModel = Gallery::find(array_change_key_case("id ='$id'"));
        $this->view->setVar('gallery', $galleryModel);
        $this->view->setVar('contactList', $contactModel);
    }
}