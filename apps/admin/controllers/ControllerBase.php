<?php

namespace Bolar\Admin\Controllers;

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    /**
     * @return mixed
     */
    protected function responseHandling($msg = null, $url = null)
    {
        if (empty($url)) {
            $url = '/admin';
        }
        if (empty($msg)) {
            $msg = 'Something went wrong, please try again later!';
        }
        if (empty($this->flashSession->has())) {
            $this->flashSession->error($msg);
        }
        return $this->response->redirect($url);
    }

}