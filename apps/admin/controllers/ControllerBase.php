<?php

namespace Bolar\Admin\Controllers;

require_once __DIR__ . "/../../../vendor/swiftmailer/swiftmailer/lib/swift_required.php";
require_once __DIR__ . "/../../../vendor/tedivm/fetch/src/Fetch/Server.php";
require_once __DIR__ . "/../../../vendor/tedivm/fetch/src/Fetch/Message.php";
require_once __DIR__ . "/../../../vendor/tedivm/fetch/src/Fetch/Attachment.php";

use Bolar\Frontend\Models\Gallery;
use Phalcon\Mvc\Controller;
use Bolar\Frontend\Models\Mailer;

class ControllerBase extends Controller
{

    private $mailServer;

    public function setMailer()
    {
        //TODO get user_id from Auth, when register/login is ready
        $mailerModel = Mailer::findFirst("user_id = '1'");
        if ($mailerModel) {
            $server = new \Fetch\Server($mailerModel->getImap(), $mailerModel->getImapPort());
            $server->setAuthentication($mailerModel->getUsername(), $mailerModel->getPassword());
            $this->mailServer = $server;
            return true;
        }
        return false;
    }

    public function getMailer()
    {
        return $this->mailServer;
    }

    public function loadMailer()
    {
        $this->setMailer();
        return $this->getMailer();
    }

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

    public function saveOriginalImages($productsModel = null, $folder = null, $returnGalleryId = false, array $crop = null)
    {
        //If not pass folder name, get from category
        if (empty($folder) && empty($this->request->getPost()['category'])) {
            return false;
        } elseif (empty($folder) && $this->request->getPost()['category']) {
            $folder = $this->request->getPost()['category'];
        }

        $dir2 = __DIR__ . '/../../../public/img/products/' . $folder . '/original/';

        if (!is_dir($dir2)) {
            mkdir($dir2, 0777, true);
        }

        foreach ($this->request->getUploadedFiles() as $file) {

            $galleryFileName = time() . '_' . $file->getName();

            $fullPath = $dir2 . $galleryFileName;
            var_dump($file->moveTo($fullPath), $fullPath);exit;
        }
    }

    /**
     * @param $productsModel
     */
    protected function uploadToGallery($productsModel = null, $folder = null, $returnGalleryId = false, array $crop = null)
    {
        //If not pass folder name, get from category
        if (empty($folder) && empty($this->request->getPost()['category'])) {
            return false;
        } elseif (empty($folder) && $this->request->getPost()['category']) {
            $folder = $this->request->getPost()['category'];
        }
        $dir = __DIR__ . '/../../../public/img/products/' . $folder . '/';

        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }

        foreach ($this->request->getUploadedFiles() as $file) {

            $galleryFileName = time() . '_' . $file->getName();

            $filePathAndName = '/img/products/' . $folder . '/' . $galleryFileName;
            $fullPath = $dir . $galleryFileName;

            $file->moveTo($fullPath);
            $image = new \Phalcon\Image\Adapter\GD($fullPath);

            if ($crop) {
                $image->crop($crop['width'], $crop['height']);
            } else {
                $image->crop(400, 400);
            }
            if (!$image->save()) {
                var_dump($image);
                exit;
            }
        }
        $data = array(
            'name' => $filePathAndName,
            'cat_id' => $this->request->getPost()['category'],
        );
        if ($productsModel) {
            $data['product_id'] = $productsModel->getId();
        }
        //Insert record at gallery model from post rq
        $galleryModel = new Gallery();
        if (!$galleryModel->save($data)) {
            $galleryModel->setErr();
            $this->view->setVar('flash', $this->flash);
        } elseif ($returnGalleryId) {
            $this->getDi()->getFlashSession()->success("Done!");
            return $galleryModel->getId();
        }
    }
}