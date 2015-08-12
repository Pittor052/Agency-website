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
        $contentManagerModel = ContentManager::find();
        $this->view->setVar('contentManager', $contentManagerModel);
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
            return $this->responseHandling('Success', '/admin/content-manager');
        }
        $this->view->setVar('url', '/admin/content-manager/create');
    }

    public function editAction($id = null)
    {
        if ($this->request->isPost()) {

            $contentManagerModel = ContentManager::findFirst("id = '$id'");
            if (empty($contentManagerModel->save($this->request->getPost()))) {
                $contentManagerModel->setErr();
                return $this->responseHandling();
            }
            return $this->responseHandling('Success', '/admin/content-manager');
        } else if (!empty($id) && $this->request->isGet()) {
            $contentModel = ContentManager::findFirst("id = '$id'");
            if (!$contentModel) {
                return $this->responseHandling('Wrong article !', '/admin/content-manager');
            }
            $this->view->setVar('url', '/admin/content-manager/edit/' . $id);
            $this->view->setVar('editData', $contentModel);
        }
    }

    public function deleteAction($id)
    {
        $this->view->disable();
        if ($this->request->isGet()) {
            $contentManagerModel = ContentManager::findFirst("id = '$id'");
            $contentManagerModel->delete();
            return $this->responseHandling('Success', '/admin/content-manager');
        }
    }

    private function getFolderName()
    {
        return 'pages' . DIRECTORY_SEPARATOR . $this->request->getPost('page_type') . DIRECTORY_SEPARATOR . $this->request->getPost('section');
    }
}