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
    public function indexAction()
    {

    }


    //Home page
    public function createAction()
    {
        if ($this->request->isPost()) {
            if ($this->request->hasFiles(true) == true) {
                $galleryId = $this->uploadToGallery(null, $this->getFolderName(), true, array(400, 243));
                if (empty($galleryId)) {
                    $this->response->redirect('admin');
                }
            }
            $contentManagerModel = new ContentManager();
            $contentManagerModel->setImageId($galleryId);
            if (empty($contentManagerModel->save($this->request->getPost()))) {
                $contentManagerModel->setErr();
                return $this->responseHandling();
            }
            return $this->responseHandling('Success');
        }
    }

    public function editAction($id)
    {
        $this->view->disable();
        if ($this->request->isPost()) {
            $contentManagerModel = ContentManager::findFirst("id = '$id'");
            if (empty($contentManagerModel->save($this->request->getPost()))) {
                $contentManagerModel->setErr();
                return $this->responseHandling();
            }
            return $this->responseHandling('Success');
        }
    }

    public function deleteAction($id)
    {
        $this->view->disable();
        if ($this->request->isPost()) {
            $contentManagerModel = ContentManager::findFirst("id = '$id'");
            $contentManagerModel->delete();
            return $this->responseHandling('Success');
        }
    }

    private function getFolderName()
    {
        return 'pages' . DIRECTORY_SEPARATOR . $this->request->getPost('page_type') . DIRECTORY_SEPARATOR . $this->request->getPost('section');
    }
}