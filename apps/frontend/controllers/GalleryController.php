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
    public function indexAction()
    {

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