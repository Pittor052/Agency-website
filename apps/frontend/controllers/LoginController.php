<?php
/**
 * Created by PhpStorm.
 * User: lazaroff
 * Date: 15-7-29
 * Time: 16:51
 */

namespace Bolar\Frontend\Controllers;

use Bolar\Frontend\Controllers\ControllerBase;
use Bolar\Frontend\Models\Users;
use Phalcon\Flash\Direct as FlashDirect;

class LoginController extends ControllerBase
{

    public function loginAction()
    {
        if ($this->request->isPost()) {
            $email = $this->request->getPost("email");
            $password = $this->request->getPost("password");
            $this->view->setVar('email', $email);
            $this->view->setVar('password', $password);
            }
        }


}

