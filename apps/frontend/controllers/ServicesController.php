<?php
/**
 * Created by PhpStorm.
 * User: lazaroff
 * Date: 15-7-29
 * Time: 16:55
 */

namespace Bolar\Frontend\Controllers;


use Bolar\Frontend\Models\ContentManager;

class ServicesController extends ControllerBase
{

    public function indexAction()
    {
        $this->setContentToView('services');
    }
}