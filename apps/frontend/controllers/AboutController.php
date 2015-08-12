<?php

namespace Bolar\Frontend\Controllers;

use Bolar\Frontend\Models\ContentManager;
use Bolar\Frontend\Models\Users;

class AboutController extends ControllerBase
{

    public function indexAction()
    {
        $this->setContentToView('about');
    }
}



