<?php
/**
 * Created by PhpStorm.
 * User: lazaroff
 * Date: 15-7-29
 * Time: 16:52
 */

namespace Bolar\Frontend\Controllers;


use Bolar\Frontend\Models\Contact;

class ContactController extends ControllerBase
{
    public function indexAction()
    {
        if ($this->request->isPost()) {
            $contactModel = new Contact();
            if (!$contactModel->save($this->request->getPost())) {
                $contactModel->setErr();
                $this->view->setVar('flash', $this->flash);
            }
        }
    }
}