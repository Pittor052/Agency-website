<?php

namespace Bolar\Frontend\Controllers;

use Bolar\Frontend\Models\Users;

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $this->setContentToView('home');
    }

    public function signUpAction()
    {
        $this->view->disable();
        if ($this->request->isPost()) {
            $usersModel = new Users();
            if (!$usersModel->save($this->request->getPost())) {
                foreach ($usersModel->getMessages() as $msg) {
                    var_dump($msg);
                    exit;
                }
            }
        }
    }
}



