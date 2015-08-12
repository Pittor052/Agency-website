<?php

namespace Bolar\Frontend\Controllers;

use Bolar\Frontend\Models\ContentManager;
use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    public function initialize()
    {

    }

    /**
     * When $page is empty will set just footer data
     * @param null $page
     */
    public function setContentToView($page = null)
    {
        $this->view->setVar('contentList', array_merge($this->getPageData($page), $this->getFooterData()));
    }

    private function getPageData($page)
    {
        if (empty($page)) {
            return array();
        }
        return ContentManager::find("page_type = '$page'")->filter(function ($obj) {
            return $obj;
        });
    }

    private function getFooterData()
    {
        return ContentManager::find("page_type = 'All'")->filter(function ($obj) {
            return $obj;
        });
    }
}
