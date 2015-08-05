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
use Bolar\Frontend\Models\ContentManager;
use Bolar\Frontend\Models\Gallery;
use Bolar\Frontend\Models\Products;
use Phalcon\Mvc\Model;


class ContentManagerController extends ControllerBase
{
    //Home page
    public function createHomeAction()
    {
        $this->view->disable();
        if ($this->request->isPost()) {
            $contentManagerModel = new ContentManager();
            if (empty($contentManagerModel->save($this->request->getPost()))) {
                $contentManagerModel->setErr();
                return $this->responseHandling();
            }
            return $this->responseHandling('Success');
        }
    }

    public function editHomeAction($id)
    {

    }

    public function deleteHomeAction($id)
    {

    }

    //Service page
    public function createServiceAction()
    {

    }

    public function editServiceAction($id)
    {

    }

    public function deleteServiceAction($id)
    {

    }

    //About page

    public function createAboutAction()
    {

    }

    public function editAboutAction($id)
    {

    }

    public function deleteAboutAction($id)
    {

    }
}