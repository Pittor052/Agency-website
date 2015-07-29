<?php

namespace Bolar\Frontend\Controllers;

use Bolar\Frontend\Models\Users;

class IndexController extends ControllerBase
{

    public function indexAction()
    {
    }

    public function signUpAction()
    {
        $this->view->disable();
//        var_dump('aaaaaa1');exit;
        if ($this->request->isPost()) {

            $usersModel = new Users();

            if (!$usersModel->save($this->request->getPost())) {
                foreach ($usersModel->getMessages() as $msg) {
                    var_dump($msg);
                    exit;
                }
//                return $this->response->redirect('sign-up');
            }
            var_dump('aaaaaa');
            exit;
//            $this->flashSession->error('Successfully add your e-mail to receive news !');

        }
//        return $this->response->redirect('sign-up');
        var_dump('aaaaaa');
    }


}



