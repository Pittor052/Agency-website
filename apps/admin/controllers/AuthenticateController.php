<?php
/**
 * Created by PhpStorm.
 * User: lazaroff
 * Date: 15-7-29
 * Time: 16:51
 */

namespace Bolar\Admin\Controllers;

use Bolar\Admin\Controllers\ControllerBase;
use Bolar\Frontend\Models\Users;
use Phalcon\Flash\Direct as FlashDirect;

class AuthenticateController extends ControllerBase
{

    public function indexAction()
    {
        //Authenticate the user
        if ($this->request->isPost()) {
            $email = $this->request->getPost("email");
            $user = Users::findFirst("email = '$email'");

            if ($user == true) {
                if ($this->security->checkHash($this->request->getPost('password'), $user->getPassword())) {
                    $this->session->set('auth', $user);

                }
//                $this->flash->success("HELLO, ADMIN!");
//                var_dump($this);exit;
                $this->response->redirect('admin');
            }
        }
    }
}

